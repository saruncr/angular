<!DOCTYPE html>
<html>
<script src= "./js/library/angular.min.js"></script>
<body>
<div ng-app="" ng-init="app_name='Keep'">

<p> <span ng-bind="firstName"></span> </p>
<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<h1>Hello {{name}} .. Nice to meet you {{name}}</h1>

</div>

</body>
</html>
