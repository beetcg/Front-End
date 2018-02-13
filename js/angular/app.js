var beetApp = angular.module('beetApp', ['ui.calendar', 'ui.bootstrap']);

beetApp.controller('joinUsController', ['$scope', function ($scope) {
    $scope.greeting = 'Hola!';
}]);

beetApp.controller('LoginController', ['$scope', function ($scope) {
    $scope.login = true;
    $scope.forgot = false;

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
    }
}]);

beetApp.controller('categoriesController', ['$scope', function ($scope) {
    $scope.computer = false;
    $scope.smart = false;
    $scope.television = false;
    $scope.audio = false;
    $scope.wifi = false;
    $scope.malware = false;
    $scope.buttonSend = false;

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
                break;
            case 2:
                $scope.computer = false;
                $scope.smart = true;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                break;
            case 3:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = true;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                break;
            case 4:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = true;
                $scope.wifi = false;
                $scope.malware = false;
                $scope.buttonSend = true;
                break;
            case 5:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = true;
                $scope.malware = false;
                $scope.buttonSend = true;
                break;
            case 6:
                $scope.computer = false;
                $scope.smart = false;
                $scope.television = false;
                $scope.audio = false;
                $scope.wifi = false;
                $scope.malware = true;
                $scope.buttonSend = true;
                break;
        }
        $scope.isVisible = !$scope.isVisible;
    }
}]);

beetApp.controller('TryNowController', [ '$scope', '$compile', '$timeout', 'uiCalendarConfig',
    function($scope, $compile, $timeout, uiCalendarConfig) {
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
        {title: 'Name',start: new Date(y, m, 1)},
        {title: 'Name',start: new Date(y, m, d - 5),end: new Date(y, m, d - 2)},
        // {id: 999,title: 'Name',start: new Date(y, m, d - 3, 16, 0),allDay: false},
        {id: 999,title: 'Name',start: new Date(y, m, d + 4, 16, 0),allDay: false},
        {title: 'Name',start: new Date(y, m, d + 1, 19, 0),end: new Date(y, m, d + 1, 22, 30),allDay: false},
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
            {type:'party',title: 'Lunch',start: new Date(y, m, d, 12, 0),end: new Date(y, m, d, 14, 0),allDay: false},
            {type:'party',title: 'Lunch 2',start: new Date(y, m, d, 12, 0),end: new Date(y, m, d, 14, 0),allDay: false},
            {type:'party',title: 'Click for Google',start: new Date(y, m, 28),end: new Date(y, m, 29),url: 'http://google.com/'}
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

    $scope.changeLang = function() {
        if($scope.changeTo === 'Hungarian'){
            $scope.uiConfig.calendar.dayNames = ["VasÃ¡rnap", "HÃ©tfÅ‘", "Kedd", "Szerda", "CsÃ¼tÃ¶rtÃ¶k", "PÃ©ntek", "Szombat"];
            $scope.uiConfig.calendar.dayNamesShort = ["Vas", "HÃ©t", "Kedd", "Sze", "CsÃ¼t", "PÃ©n", "Szo"];
            $scope.changeTo= 'English';
        } else {
            $scope.uiConfig.calendar.dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            $scope.uiConfig.calendar.dayNamesShort = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            $scope.changeTo = 'Hungarian';
        }
    };
    /* event sources array*/
    $scope.eventSources = [$scope.events, $scope.eventSource, $scope.eventsF];
    $scope.eventSources2 = [$scope.calEventsExt, $scope.eventsF, $scope.events];

}]);