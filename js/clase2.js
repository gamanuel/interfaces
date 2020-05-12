'use strict';

window.onload = function() {

    class Vehicle {
        constructor(var1, var2) {
            this.info = 'Vehiculo'
            this.patente = var1;
            this.marca = var2;
        }
    }

    class Truck {
        constructor(var1, var2) {
            this.type = new Vehicle(var1, var2);
            this.remolque = '1000k';
        }
    }

    class Car {
        constructor(var1, var2) {
            this.type = new Vehicle(var1, var2);
        }
    }

    let car = new Car('ABC-123', 'Ford');
    console.log(car);

};