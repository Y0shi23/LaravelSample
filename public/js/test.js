angular.module('myApp', [])
    .controller('myController', function($scope) {
        $scope.name = '長田 好史';
        $scope.getname = function() {
            return '長田'
        }
    })
    .controller('myCtrl',function($scope){
        //initObject
        $scope.user = {};
        $scope.user.gender = "man";
        $scope.user.adult = true;
    
        //array for option
        $scope.years = [2001,2002,2003];
    
        //function(addボタン押下時)
        $scope.addUser = function(){
            alert(JSON.stringify($scope.user));
        }
    })
    .controller('myList', function($scope, CustomList) {
        $scope.ctmls = CustomList();
    })
    .value('CustomList', function(){
        return [
            {
              title: 'bootstrapリファレンス',
              price: 12000,
              published: new Date(2016, 1, 18)
          },
          {
              title: 'wordpressリファレンス',
              price: 15000,
              published: new Date(2016, 4, 18)
          },
          {
              title: 'HTMLリファレンス',
              price: 2500,
              published: new Date(2016, 7, 18)
          },
          {
              title: 'CSSリファレンス',
              price: 5000,
              published: new Date(2016, 6, 18)
          },
          {
              title: 'jQueryリファレンス',
              price: 7500,
              published: new Date(2016, 5, 18)
          },
          {
              title: 'mySQLリファレンス',
              price: 10000,
              published: new Date(2016, 4, 18)
          }
         ];
     });

var searchPeople = function(firstName, lastName, height, age, hobby){
    return '長田 好史'
}

// (5) ["firstName", "lastName", "height", "age", "hobby"]
console.log(angular.injector().annotate(searchPeople));