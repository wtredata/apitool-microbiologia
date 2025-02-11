function inputDates(input = $('.inputDateSingle'), tipo = "basico", config_aditional = [], callback = null){

    let config_pred;

    switch(tipo){
        case "basico":
            config_pred = {
                singleDatePicker: true,
                showDropdowns: true,
                showWeekNumbers: true,
                linkedCalendars: false,
                showCustomRangeLabel: false,
                locale: {
                    format: 'YYYY/MM/DD'
                }
            };

            $.each(config_aditional, function(index, val){
                config_pred[index] = val;
            });

            input.daterangepicker(config_pred, callback);
            break;
        case "intervalo_avanzado":
            config_pred = {
                showDropdowns: true,
                showWeekNumbers: true,
                ranges: {
                    'Hoy': [moment(), moment()],
                    'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Últimos 7 días': [moment().subtract(6, 'days'), moment()],
                    'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
                    'Este mes': [moment().startOf('month'), moment().endOf('month')],
                    'El mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                linkedCalendars: false,
                locale: {
                    format: 'YYYY/MM/DD'
                },
                alwaysShowCalendars: true,
                showCustomRangeLabel: false,
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            }

            
            $.each(
                config_aditional,
                function(index, val){
                    $.each(
                        config_aditional[index],
                        function(index, val){
                            config_pred[index] = val;
                        }
                    )
                }
            );

            input.daterangepicker(config_pred, callback);
            break;
        case "basico_hora":
            config_pred = {
                singleDatePicker: true,
                showDropdowns: true,
                showWeekNumbers: true,
                linkedCalendars: false,
                showCustomRangeLabel: false,
                locale: {
                    format: 'YYYY/MM/DD HH:mm:ss'
                },
                timePicker: true,
                timePickerSeconds: true
            };

            $.each(
                config_aditional,
                function(index, val){
                    $.each(
                        config_aditional[index],
                        function(index, val){
                            config_pred[index] = val;
                        }
                    )
                }
            );

            input.daterangepicker(config_pred, callback);
            break;
    }
}