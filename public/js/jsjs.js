
window.onload = function () {

    // console.log($active);
    // console.log($nonactive);

    var ctx = document.getElementById('myChart').getContext('2d');
    var ctxx = document.getElementById('myChartt').getContext('2d');
    var behaviorLevel = document.getElementById('behaviorLevel').getContext('2d');
    var behaviorLevelline = document.getElementById('behaviorLevelline').getContext('2d');

    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    
    // The data for our dataset  '#00c5dc','#f4516c'
    data: {
    labels: ['عدد الطلاب الكلي'],
    
    datasets: [{
        label: ' عدد الطلاب الكلي',
        backgroundColor: [
            '#2c1254',
            '#fdbf50',
            '#ce0900',
            
        ],
        borderColor: 'rgb(0, 0,0, 0)',
        data: [$countStd]
    }]
    },
    
    // Configuration options go here
    options: {}
    });



    var chart = new Chart(ctxx, {
        // The type of chart we want to create
        type: 'polarArea',
        
        // The data for our dataset  '#00c5dc','#f4516c'
        data: {
        labels: ['عدد الطلاب '],
        
        datasets: [{
           
            backgroundColor: [
                '#2c1254',
                '#fdbf50',
                '#ce0900',
                '#00be65'
            ],
            borderColor: 'rgb(0, 0,0, 0)',
            data: [$countStd]
        }]
        },
        
        // Configuration options go here
        options: {}
        });

        var chart3 = new Chart(behaviorLevel, {
            // The type of chart we want to create
            type: 'polarArea',
            
            // The data for our dataset  '#00c5dc','#f4516c'
            data: {
            labels: ['  السلوك الحسن', ' السلوك  السئ'],
            
            datasets: [{
               
                backgroundColor: [
                    '#00be65',
                    '#ce0900'
                    
                    
                ],
                borderColor: 'rgb(0, 0,0, 0)',
                data: [$level_behavior2Count, $level_behaviorCount]
            }]
            },
            
            // Configuration options go here
            options: {}
            });

            var chart4 = new Chart(behaviorLevelline, {
                // The type of chart we want to create  doughnut
                type: 'line',
                
                // The data for our dataset  '#00c5dc','#f4516c'
                data: {
                labels: ['   التعامل السئ', '   الغشاشين','لا يتفاعلوا مع المعلم',
                'لا يجلبو الكتاب المدرسي','لا يسلموا الواجب المدرسي'],
                
                datasets: [{
                    label: ' التعامل السئ ',
                    backgroundColor: [
                        '#ce0900',
                        '#ff7875',
                       
                        '#00c5dc',
                        '#c9a86b',
                        '#2d2d2d'
                        
                    ],
                    borderColor: 'rgb(0, 0,0, 0)',
                    data: [$noGoodTransaction, $cheat,$noActiveTeacher,$noBook ,$noHomeWark]
                }]
                },
                
       
                options: {}
                });








    
    //  var chart3 = new Chart(ctx3, {
    //         // The type of chart we want to create
    //         type: 'doughnut',
            
    //         // The data for our dataset
    //         data: {
    //         labels: ['Active', 'Non Active'],
            
    //         datasets: [{
               
    //             backgroundColor: [
    //                 '#00c5dc',
    //                 '#f4516c'
    //             ],
    //             borderColor: 'rgb(0, 0,0, 0)',
    //             data: [$active, $nonactive]
    //         }]
    //         },
            
    //         // Configuration options go here
    //         options: {}
    //         });
}
    