

if(jQuery){
      console.log('yes');
      }else {
            console.log('no')
      }
       

// Light box

lightbox.option({
      'alwaysShowNavOnTouchDevices': true,
      // 'wrapAround': true
    })


// Rating system

$(document).ready(function(){
      $('.fa-star').mouseover(function(){
            console.log('come baby')
      });
      $('.fa-star').mouseleave(function(){
            console.log('get out');
      });

})


// var taskCard = document.querySelector('.task-card');

// const taskList = document.querySelector('.task-list');

// const taskitem = document.querySelectorAll('.hello');

// // taskitem[1].className.add('new')

// // let check = taskitem[1].className;

// console.log(check);

// //remove evens elements from ul

// for(var i = 0; i < 5; i++) {
//       if(i % 2 !== 0) {
//             taskitem[i].remove()
//       }
// }

// const creating = document.createElement('h1');

// creating.classList = 'text-center mkd-color' ;

// // creating.innerHTML = 'hello world' ;

// creating.appendChild(document.createTextNode('hello world'));


// taskCard.appendChild(creating );

// console.log(taskitem);


// console.log(creating)

// UI of pricing tags

const serviceForm = document.querySelector('.pricing-form');
const serviceNameInput = document.querySelector('.service-name-input');
const servicePriceInput = document.querySelector('.service-price-input');
const serviceAdd = document.querySelector('.add-service');
const serviceCollection = document.querySelector('.service-collection');
const serviceDelete = document.querySelector('.service-delete');

//service name array
let serviceNameArray = [];

//service price array
let servicePriceArray = [];

// all event listener added

loadAllEventListeners();

function loadAllEventListeners() {

      serviceAdd.addEventListener('click', submitService);
      serviceCollection.addEventListener('click', deleteListItem);
}

function submitService(e){
      
      if((serviceNameInput.value === '') || (servicePriceInput.value === '') || (servicePriceInput.value <= 0)) {
            alert('please enter Proper Service Details');
      } else {
      const creatpriceLi = document.createElement('li');

      //adding class name
      creatpriceLi.className = 'list-group-item d-flex justify-content-between align-items-center';

      //create price name div
      const priceNameDiv = document.createElement('div');

      //create text node
      priceNameDiv.appendChild(document.createTextNode(serviceNameInput.value));

      // append price name to li
      creatpriceLi.appendChild(priceNameDiv)

      //create div elements
      const createDiv = document.createElement('div');

      //create span elements
      const createSpan = document.createElement('span');

      //create Rupee icon elements
      const createRupeeI = document.createElement('i');

      createRupeeI.className = 'fa fa-inr pr-1';

      // textnode
      createSpan.appendChild(createRupeeI);

      // Price of the service

      createSpan.appendChild(document.createTextNode(servicePriceInput.value));

      // creatpriceLi.appendChild(createSpan);


      //create a elements
      const createA = document.createElement('a');
      createA.className = 'service-delete';

      //create delete i elements
      const createDelete = document.createElement('i');
      createDelete.className = 'fa fa-trash pl-4';

      createA.appendChild(createDelete);  
      
      // inserting all to the div

      createDiv.appendChild(createSpan);

      createDiv.appendChild(createA);

      // insertingf all to the li

      creatpriceLi.appendChild(createDiv);
      // creatpriceLi.appendChild(deletelink);



      //appending li to ul
      serviceCollection.appendChild(creatpriceLi);

      //Putting the values into the array
      serviceNameArray.push(serviceNameInput.value);
      servicePriceArray.push(servicePriceInput.value);
      
      console.log();

      serviceNameInput.value = '';
      servicePriceInput.value = '';
      }
            
      e.preventDefault();
}


// delete Item

function deleteListItem(e) {
      if(e.target.parentElement.classList.contains('service-delete')) {
            let selectingItem = e.target.parentElement.parentElement.parentElement;
            let deletingPriceName =selectingItem.children[0].textContent;

            let deletingPrice = selectingItem.children[1].textContent;

             let indexDeletePriceName = serviceNameArray.indexOf(deletingPriceName);
             console.log(indexDeletePriceName);

            if (indexDeletePriceName > -1) {
                  serviceNameArray.splice(indexDeletePriceName, 1);
                  servicePriceArray.splice(indexDeletePriceName, 1);

            }

            if(confirm('Are You Sure?')) {
                  selectingItem.remove();

            }

      }
}
