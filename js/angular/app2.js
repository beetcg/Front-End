var beetApp = angular.module('beetApp', []);

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
    $scope.computer = true;
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
