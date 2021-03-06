var beetApp = angular.module('beetApp', ['ui.calendar', 'ui.bootstrap', 'flow','ngMask','chart.js','ngAnimate']);

beetApp.controller('joinUsController', ['$scope', function ($scope) {
    $scope.greeting = 'Hola!';
}]);

beetApp.controller('LoginController', ['$scope', function ($scope) {
    $scope.login = true;
    $scope.forgot = false;
    $scope.activeEye = false;
    $scope.inputType = 'password';

    $scope.selectOption = function (opc) {
        switch (opc) {
            case 1:
                $scope.login = true;
                $scope.forgot = false;
                break;
            case 2:
                $scope.login = false;
                $scope.forgot = true;
                break;
        }
        $scope.isVisible = !$scope.isVisible;
    };

    $scope.hideShowPassword = function(){
        $scope.activeEye = !$scope.activeEye;

        if ($scope.inputType == 'password') {
            $scope.inputType = 'text';
        }
        else
            $scope.inputType = 'password';
    };
}]);

beetApp.controller('categoriesController', ['$scope', function ($scope) {
    $scope.computer = true;
    $scope.smart = false;
    $scope.television = false;
    $scope.audio = false;
    $scope.wifi = false;
    $scope.malware = false;
    $scope.buttonSend = false;
    $scope.categories = true;
    $scope.tabs = false;

    $scope.selectOption = function (opc) {
        switch (opc) {
            case 1:
                $scope.computer = true;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                $scope.categories = false;
                $scope.tabs = true;
                break;
            case 2:
                $scope.computer = false;
                $scope.smart = true;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                $scope.categories = false;
                $scope.tabs = true;
                break;
            case 3:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = true;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                $scope.categories = false;
                $scope.tabs = true;
                break;
            case 4:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = true;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                $scope.categories = false;
                $scope.tabs = true;
                break;
            case 5:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = true;
                $scope.malware = false;
                $scope.buttonSend = true;
                $scope.categories = false;
                $scope.tabs = true;
                break;
            case 6:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = true;
                $scope.buttonSend = true;
                $scope.categories = false;
                break;
        }
        $scope.isVisible = !$scope.isVisible;
    }
}]);

beetApp.controller('TryNowController', [ '$scope', '$compile', '$timeout', 'uiCalendarConfig', '$log',
    function($scope, $compile, $timeout, uiCalendarConfig, $log) {

        $scope.inputType = 'password';
        $scope.hideShowPassword = function(){
            $scope.activeEye = !$scope.activeEye;

            if ($scope.inputType == 'password') {
                $scope.inputType = 'text';
            }
            else
                $scope.inputType = 'password';
        };


        $scope.labels = ['2006', '2007', '2008', '2009', '2010', '2011', '2012'];
        $scope.series = ['Series A', 'Series B'];

        $scope.data = [
            [65, 59, 80, 81, 56, 55, 40],
            [28, 48, 40, 19, 86, 27, 90]
        ];


        $scope.limit = 3;
        $scope.loading = false;

        $scope.showMore = function(){
            $scope.limit = $scope.limit + 3;
        };

        $scope.productos =
            [
                {name : 'Computer Repair and Help'},
                {name : 'Computer Tune Up'},
                {name : 'Data Back-Up or Transfer'},
                {name : 'New Computer Setup'},
                {name : 'Software Install or Uninstall'},
                {name : 'Printer Setup'},
                {name : 'OS (Operating System) Install or Re-Install'},
            ];

        $scope.categoriesAdd =
            [
                {name : 'Cell Phones & Accesories'},
                {name : 'Computers'},
                {name : 'Smart Home'},
                {name : 'TV, Audio & Home Theater'},
                {name : 'Business & Office Electronics'},
                {name : 'Car Electronics & GPS'},
                {name : 'Video Games'},
            ];

        $scope.extras =
            [
                {name : 'Plus name'},
                {name : 'Plus name'},
                {name : 'Plus name'},
                {name : 'Plus name'},
                {name : 'Plus name'},
                {name : 'Plus name'},
                {name : 'Plus name'},
            ];

        $scope.waitings =
            [
                {name : 'sadnsjakd'},
                {name : 'sadnsjakd'},
                {name : 'sadnsjakd'},
            ];

        $scope.hours =
            [
                {name : '08:00 AM'},
                {name : '09:00 AM'},
                {name : '10:00 AM'},
                {name : '11:00 AM'},
                {name : '12:00 PM'},
                {name : '01:00 PM'},
                {name : '02:00 PM'},
                {name : '03:00 PM'},
                {name : '04:00 PM'},
                {name : '05:00 PM'}
            ];

        $scope.imgDetails =
            [
                {id : '1', url: 'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201606/20/00115216114155____1__640x640.jpg'},
                {id : '2', url: 'https://tubby.scene7.com/is/image/tubby/PHILIPSE27?$fullsize$'},
                {id : '3', url: 'https://i.blogs.es/542146/278e8qjab/450_1000.jpeg'}
            ];

        $scope.initHoverdir = function(){
            $timeout(function () {
                $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
            });
        };

    //PAYMENT GATEWAY
        $scope.tdc = false;
        $scope.options = true;

        $scope.selectMethod = function (opc) {
            switch (opc) {
                case 1:
                    $scope.tdc = true;
                    $scope.options = false;
                    break;
                case 2:
                    $scope.tdc = false;
                    $scope.options = true;
                    break;
            }
            $scope.isVisible = !$scope.isVisible;
        }

    //PAGINATION
        $scope.totalItems = 64;
        $scope.currentPage = 4;

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };

        $scope.pageChanged = function() {
            $log.log('Page changed to: ' + $scope.currentPage);
        };

        $scope.maxSize = 3;
        $scope.bigTotalItems = 175;
        $scope.bigCurrentPage = 1;

    $scope.calendar = true;
    $scope.schedule = false;

    $scope.selectView = function (opc) {
        switch (opc) {
            case 1:
                $scope.calendar = true;
                $scope.schedule = false;
                break;
            case 2:
                $scope.calendar = false;
                $scope.schedule = true;
                break;
            }
            $scope.isVisible = !$scope.isVisible;
        }

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $scope.changeTo = 'Hungarian';
    /* event source that pulls from google.com */
    $scope.eventSource = {
        url: "http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic",
        className: 'gcal-event',           // an option!
        currentTimezone: 'America/Chicago' // an option!
    };
    /* event source that contains custom events on the scope */
    $scope.events = [
        // {title: 'Name',start: new Date(y, m, 1)},
        // {title: 'Name',start: new Date(y, m, d - 5),end: new Date(y, m, d - 2)},
        // // {id: 999,title: 'Name',start: new Date(y, m, d - 3, 16, 0),allDay: false},
        // {id: 999,title: 'Name',start: new Date(y, m, d + 4, 16, 0),allDay: false},
        // {title: 'Name',start: new Date(y, m, d + 1, 19, 0),end: new Date(y, m, d + 1, 22, 30),allDay: false},
        // {title: 'Name',start: new Date(y, m, 28),end: new Date(y, m, 29),url: 'http://google.com/'}
    ];
    /* event source that calls a function on every view switch */
    $scope.eventsF = function (start, end, timezone, callback) {
        var s = new Date(start).getTime() / 1000;
        var e = new Date(end).getTime() / 1000;
        var m = new Date(start).getMonth();
        var events = [{title: 'Feed Me ' + m,start: s + (50000),end: s + (100000),allDay: false, className: ['customFeed']}];
        callback(events);
    };

    $scope.calEventsExt = {
        color: '#f00',
        textColor: 'yellow',
        events: [
            // {type:'party',title: 'Lunch',start: new Date(y, m, d, 12, 0),end: new Date(y, m, d, 14, 0),allDay: false},
            // {type:'party',title: 'Lunch 2',start: new Date(y, m, d, 12, 0),end: new Date(y, m, d, 14, 0),allDay: false},
            // {type:'party',title: 'Click for Google',start: new Date(y, m, 28),end: new Date(y, m, 29),url: 'http://google.com/'}
        ]
    };
    /* alert on eventClick */
    $scope.alertOnEventClick = function( date, jsEvent, view){
        $scope.alertMessage = (date.title + ' was clicked ');
    };
    /* alert on Drop */
    $scope.alertOnDrop = function(event, delta, revertFunc, jsEvent, ui, view){
        $scope.alertMessage = ('Event Dropped to make dayDelta ' + delta);
    };
    /* alert on Resize */
    $scope.alertOnResize = function(event, delta, revertFunc, jsEvent, ui, view ){
        $scope.alertMessage = ('Event Resized to make dayDelta ' + delta);
    };
    /* add and removes an event source of choice */
    $scope.addRemoveEventSource = function(sources,source) {
        var canAdd = 0;
        angular.forEach(sources,function(value, key){
            if(sources[key] === source){
                sources.splice(key,1);
                canAdd = 1;
            }
        });
        if(canAdd === 0){
            sources.push(source);
        }
    };
    /* add custom event*/
    $scope.addEvent = function() {
        $scope.events.push({
            title: 'Open Sesame',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            className: ['openSesame']
        });
    };
    /* remove event */
    $scope.remove = function(index) {
        $scope.events.splice(index,1);
    };
    /* Change View */
    $scope.changeView = function(view,calendar) {
        uiCalendarConfig.calendars[calendar].fullCalendar('changeView',view);
    };
    /* Change View */
    $scope.renderCalender = function(calendar) {
        console.log(calendar);
        if(uiCalendarConfig.calendars[calendar]){
            setTimeout(function() {
            console.log(calendar);
            uiCalendarConfig.calendars[calendar].fullCalendar('render');
            }, 250);
        }
    };
    /* Render Tooltip */
    $scope.eventRender = function( event, element, view ) {
        element.attr({'tooltip': event.title,
            'tooltip-append-to-body': true});
        $compile(element)($scope);
    };
    /* config object */
    $scope.uiConfig = {
        calendar:{
            height: 450,
            editable: true,
            header:{
                left: 'title',
                center: '',
                right: 'today prev,next'
            },
            eventClick: $scope.alertOnEventClick,
            eventDrop: $scope.alertOnDrop,
            eventResize: $scope.alertOnResize,
            eventRender: $scope.eventRender
        }
    };

}]);

beetApp.controller('registerController', ['$http', '$scope', function ($http, $scope) {

    $scope.vehimag ={};
    $scope.vehimagv ={};

    $scope.itemEliminar = {id    : "" ,
        index : ""   };

    $scope.removeImage= function (file){
//                    console.log(file);
        if(file.idImage) {
            file.idImage.remove();
        }
        file.cancel();
    };

    $scope.someHandlerMethod = function( $file, $message, $flow , formName, inputName){
        $file.idImage = $('<input>').attr({
            type: 'hidden',
            id: $message.replace('"','').replace('"',''),
            name: inputName,
            value: $message.replace('"','').replace('"','')
        }).appendTo(formName);
        $scope.subiendoImgs--;
        $scope.imgsUp = 1;
    };

    $scope.subiendoImgs = 0;
    $scope.added = function(){
        $scope.subiendoImgs++;
        $scope.imgsUp = 0;
    };

    $scope.cerrar = false;

    $scope.formNuevoVehiculoSubmit =  function(form){
        $scope.formVehiculoSubmit = true;
        if(form.$valid){
            $scope.formVehiculoSubmit = false;
            $('#formNuevoVehiculo').submit()
        }
    };

    $scope.limpform = function(){
        $scope.marca = $scope.marcas[0];;
        $scope.modelo = {name: "", id: 0};
        $scope.anio = {name: "", id: 0};
        $scope.version = {name: "", id: 0};
        $scope.placa = '';
        $scope.serialcarroceria = '';

        $scope.removeImage($scope.vehimagv.flowa);
        $scope.removeImage($scope.vehimagv.flowb);
        $scope.removeImage($scope.vehimagv.flowc);
        $scope.removeImage($scope.vehimagv.flowd);
        $('input[name="fotoVehiculo[]"]').remove();

    };
}]);