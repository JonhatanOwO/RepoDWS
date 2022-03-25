<<<<<<< HEAD
var multiplos=[];
var valor=5;
var valor2=7;
var multi=1;
multiplos=[1,2,3,4,5,6,7,8,9,10];
console.log("imprimiendo la tabla del",valor)
for(i=0;i<multiplos.length;i++)
    {
        multi=valor*multiplos[i];
        console.log(valor, 'x', i+1, '=',multi);
    }
console.log("Imprimiendo las tablas del",valor,"hasta",valor2);
if(valor<valor2){
    for(i=valor;i<=valor2;i++)
        {
            for(z=0;z<multiplos.length;z++)
                {
                    multi=i*multiplos[z];
                    console.log(i,'x',multiplos[z],'=',multi)
                }
        }
}else{
        console.log("no se puede hacer lo pedido dado que el primer numero es mayor que el segundo")
=======
var multiplos=[];
var valor=5;
var valor2=7;
var multi=1;
multiplos=[1,2,3,4,5,6,7,8,9,10];
console.log("imprimiendo la tabla del",valor)
for(i=0;i<multiplos.length;i++)
    {
        multi=valor*multiplos[i];
        console.log(valor, 'x', i+1, '=',multi);
    }
console.log("Imprimiendo las tablas del",valor,"hasta",valor2);
if(valor<valor2){
    for(i=valor;i<=valor2;i++)
        {
            for(z=0;z<multiplos.length;z++)
                {
                    multi=i*multiplos[z];
                    console.log(i,'x',multiplos[z],'=',multi)
                }
        }
}else{
        console.log("no se puede hacer lo pedido dado que el primer numero es mayor que el segundo")
>>>>>>> 13614d8adab6eae4cad89e16e12bbd2205df61d4
    }