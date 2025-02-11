function setEscalaError(window_response) {
    var helpers = Chart.helpers;

    // Se extiende la escala del objeto principal
    let escalaErrores = Chart.Scale.extend({
        handleTickRangeOptions: function () {
            var me = this;
            var opts = me.options;
            var tickOpts = opts.ticks;

            if (tickOpts.beginAtZero) {
                var minSign = helpers.sign(me.min);
                var maxSign = helpers.sign(me.max);

                if (minSign < 0 && maxSign < 0) {
                    me.max = 0;
                } else if (minSign > 0 && maxSign > 0) {
                    me.min = 0;
                }
            }

            if (tickOpts.min !== undefined) {
                me.min = tickOpts.min;
            } else if (tickOpts.suggestedMin !== undefined) {
                me.min = Math.min(me.min, tickOpts.suggestedMin);
            }

            if (tickOpts.max !== undefined) {
                me.max = tickOpts.max;
            } else if (tickOpts.suggestedMax !== undefined) {
                me.max = Math.max(me.max, tickOpts.suggestedMax);
            }

            if (me.min === me.max) {
                me.max++;

                if (!tickOpts.beginAtZero) {
                    me.min--;
                }
            }
        },
        buildTicks: function () {
            let me = this;
            let ticks = me.ticks = [];
            let nivel_chart = $(this.ctx.canvas).data("nivel");

            try {
                ticks.push( round(((parseFloat(window_response.valores_estadisticos[lvl_i].diana)) + ((parseFloat(window_response.limite_aps.valor_limite) / 100) * parseFloat(window_response.valores_estadisticos[lvl_i].diana))), 100) ); // LS
                ticks.push( round(parseFloat(window_response.valores_estadisticos[lvl_i].diana), 100) ); // Diana
                ticks.push( round(((parseFloat(window_response.valores_estadisticos[lvl_i].diana)) - ((parseFloat(window_response.limite_aps.valor_limite) / 100) * parseFloat(window_response.valores_estadisticos[lvl_i].diana))), 100) ); // LI
                me.start = me.min;
                me.end = me.max;
            } catch (error) {
                ticks = [null];
            }
        },
        convertTicksToLabels: function () {
            var me = this;
            me.ticksAsNumbers = me.ticks.slice();
            me.zeroLineIndex = me.ticks.indexOf(0);
            Chart.Scale.prototype.convertTicksToLabels.call(me);
        },
        determineDataLimits: function () {
            var me = this;
            var opts = me.options;
            var tickOpts = opts.ticks;
            var chart = me.chart;
            var data = chart.data;
            var datasets = data.datasets;
            var isHorizontal = me.isHorizontal();

            function IDMatches(meta) {
                return isHorizontal ? meta.xAxisID === me.id : meta.yAxisID === me.id;
            }

            me.min = null;
            me.max = null;

            if (opts.stacked) {
                var valuesPerType = {};
                var hasPositiveValues = false;
                var hasNegativeValues = false;

                helpers.each(datasets, function (dataset, datasetIndex) {
                    var meta = chart.getDatasetMeta(datasetIndex);
                    if (valuesPerType[meta.type] === undefined) {
                        valuesPerType[meta.type] = {
                            positiveValues: [],
                            negativeValues: []
                        };
                    }
                    var positiveValues = valuesPerType[meta.type].positiveValues;
                    var negativeValues = valuesPerType[meta.type].negativeValues;
                    if (chart.isDatasetVisible(datasetIndex) && IDMatches(meta)) {
                        helpers.each(dataset.data, function (rawValue, index) {
                            var value = +me.getRightValue(rawValue);
                            if (isNaN(value) || meta.data[index].hidden) {
                                return;
                            }

                            positiveValues[index] = positiveValues[index] || 0;
                            negativeValues[index] = negativeValues[index] || 0;

                            if (opts.relativePoints) {
                                positiveValues[index] = 100;
                            } else {
                                if (value < 0) {
                                    hasNegativeValues = true;
                                    negativeValues[index] += value;
                                } else {
                                    hasPositiveValues = true;
                                    positiveValues[index] += value;
                                }
                            }
                        });
                    }
                });

                helpers.each(valuesPerType, function (valuesForType) {
                    var values = valuesForType.positiveValues.concat(valuesForType.negativeValues);
                    var minVal = helpers.min(values);
                    var maxVal = helpers.max(values);
                    me.min = me.min === null ? minVal : Math.min(me.min, minVal);
                    me.max = me.max === null ? maxVal : Math.max(me.max, maxVal);
                });

            } else {
                helpers.each(datasets, function (dataset, datasetIndex) {
                    var meta = chart.getDatasetMeta(datasetIndex);
                    if (chart.isDatasetVisible(datasetIndex) && IDMatches(meta)) {
                        helpers.each(dataset.data, function (rawValue, index) {
                            var value = +me.getRightValue(rawValue);
                            if (isNaN(value) || meta.data[index].hidden) {
                                return;
                            }

                            if (me.min === null) {
                                me.min = value;
                            } else if (value < me.min) {
                                me.min = value;
                            }

                            if (me.max === null) {
                                me.max = value;
                            } else if (value > me.max) {
                                me.max = value;
                            }
                        });
                    }
                });
            }
            this.handleTickRangeOptions();
        },
        getTickLimit: function () {
            var maxTicks;
            var me = this;
            var tickOpts = me.options.ticks;

            if (me.isHorizontal()) {
                maxTicks = Math.min(tickOpts.maxTicksLimit ? tickOpts.maxTicksLimit : 11, Math.ceil(me.width / 50));
            } else {
                var tickFontSize = helpers.getValueOrDefault(tickOpts.fontSize, Chart.defaults.global.defaultFontSize);
                maxTicks = Math.min(tickOpts.maxTicksLimit ? tickOpts.maxTicksLimit : 11, Math.ceil(me.height / (2 * tickFontSize)));
            }

            return maxTicks;
        },
        handleDirectionalChanges: function () {
            if (!this.isHorizontal()) {
                this.ticks.reverse();
            }
        },
        getLabelForIndex: function (index, datasetIndex) {
            return +this.getRightValue(this.chart.data.datasets[datasetIndex].data[index]);
        },
        getPixelForValue: function (value, index, datasetIndex, includeOffset) {
            var me = this;
            var paddingLeft = me.paddingLeft;
            var paddingBottom = me.paddingBottom;
            var start = me.start;

            var rightValue = +me.getRightValue(value);
            var pixel;
            var innerDimension;
            var range = me.end - start;

            if (me.isHorizontal()) {
                innerDimension = me.width - (paddingLeft + me.paddingRight);
                pixel = me.left + (innerDimension / range * (rightValue - start));
                return Math.round(pixel + paddingLeft);
            } else {
                innerDimension = me.height - (me.paddingTop + paddingBottom);
                pixel = (me.bottom - paddingBottom) - (innerDimension / range * (rightValue - start));
                return Math.round(pixel);
            }
        },
        getValueForPixel: function (pixel) {
            var me = this;
            var isHorizontal = me.isHorizontal();
            var paddingLeft = me.paddingLeft;
            var paddingBottom = me.paddingBottom;
            var innerDimension = isHorizontal ? me.width - (paddingLeft + me.paddingRight) : me.height - (me.paddingTop + paddingBottom);
            var offset = (isHorizontal ? pixel - me.left - paddingLeft : me.bottom - paddingBottom - pixel) / innerDimension;
            return me.start + ((me.end - me.start) * offset);
        },
        getPixelForTick: function (index, includeOffset) {
            return this.getPixelForValue(this.ticksAsNumbers[index], null, null, includeOffset);
        }
    });

    Chart.scaleService.registerScaleType('escalaErrores', escalaErrores);

}
