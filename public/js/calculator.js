angular.module('CalculatorApp', [])
    .controller('CalculatorController', function($scope) {
        $scope.result = function() {

            if ($scope.gender == 'male') {
                return 66 + ($scope.c * 6.3) + ($scope.b * 12.9) - ($scope.a * 6.8);
            }
            if ($scope.gender == 'female') {
                return 655 + ($scope.c * 4.3) + ($scope.b * 4.7) - ($scope.a * 4.7);
            }
        };
    });