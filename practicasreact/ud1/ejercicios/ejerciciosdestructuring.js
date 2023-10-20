/*
Ejercicio 1

Reescribe el siguiente código para usar la destructuración de matrices 
en lugar de asignar cada valor a una variable.*/
{
    console.log("Ejercicio 1");
  
    let item = ["Egg", 0.25, 12];
  
    let name = item[0];
    let price = item[1];
    let quantity = item[2];
  
    console.log(`Item: ${name}, Quantity: ${quantity}, Price: ${price}`);
    console.log();
  }
  
  /*
  Ejercicio 2
  
  Reescribe el siguiente código para asignar cada número a la variable correcta.
  */
  {
    console.log("Ejercicio 2");
  
    let numbers = [3, 5, 4, 2, 6, 1];
  
    let [one, two, three, four, five, six] = numbers;
  
    console.log(`One: ${one}, Two: ${two}, Three: ${three}, Four: ${four}, Five: ${five}, Six: ${six}`);
    console.log();
  }
  
  /*
  Ejercicio 3
  
  Dado un objeto llamado 'user'.
  
  Escriba la siguiente destructuración:
  
  - propiedad 'name' en la variable 'name'.
  - propiedad 'years' en la variable 'age'.
  - Propiedad 'isAdmin' en la variable 'isAdmin' (false, si no existe tal propiedad)
  */
  {
    console.log("Ejercicio 3");
  
    let user = { name: "John", years: 30 };
  
    // your code to the left side:
    let {} = user;
  
    console.log(name); // John
    console.log(age); // 30
    console.log(isAdmin); // false
    console.log();
  }
  
  /*
  Ejercicio 4
  
  Reescribe el siguiente código para usar el array destructuring en vez de la 
  asignación de cada valor a una variable
  */
  {
    console.log("Ejercicio 4");
  
    let person = [12, "Chris", "Owen"];
  
    let firstName = person[1];
    let lastName = person[2];
    let age = person[0];
  
    console.log(`Person - Age: ${age}, Name: ${firstName} ${lastName}`);
    console.log();
  }
  
  /* 
  Ejercicio 5
  
  Reescribe el siguiente código para usar el array destructuring 
  array destructuring en vez de la asignación de cada valor a una variable
  Asegúrate de no dejar variables sin usar
  */
  {
    console.log("Ejercicio 5");
  
    let person = ["Chris", 12, "Owen"];
  
    let firstName = person[0];
    let lastName = person[2];
  
    console.log(`Name: ${firstName} ${lastName}`);
    console.log();
  }
  
  /* 
  Ejercicio 6
  
  Usa el Array Destructuring para obtener el último nombre del Array 
  
  */
  {
    console.log("Ejercicio 6");
  
    const students = ['Christina', 'Jon', 'Alexandare'];
  
    // Write your code here
    const [] = students;
  
    console.log(lastName);
    console.log();
  }
  
  /*
  Ejercicio 7
  
  Usa el Array Destructuring para obtener todos los nombres del Array anidado
  */
  {
    console.log("Ejercicio 7");
  
    const moreStudents = [
      'Chris', 
      ['Ahmad', 'Antigoni'], 
      ['Toby', 'Sam']
    ];
  
    // Write your code here
    const [] = moreStudents;
  
    console.log(student1, student2, student3, student4, student5);
    console.log();
  }