//




removeItemFromBag();
updateBagNoItems();


// Global Variables

var removeBagItemButtons, buttonClicked;



function removeItemFromBag() {

    removeBagItemButtons = document.getElementsByClassName('bag_Remove_btn');

    for (var i = 0; i < removeBagItemButtons.length; i++) {


        console.log('clicked' + removeBagItemButtons.length);

        var button = removeBagItemButtons[i]

        button.addEventListener('click', function(event) {


            buttonClicked = event.target;

            // console.log('Button Click' + buttonClicked);

            buttonClicked.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.remove();

            // console.log('clicked' + removeBagItemButtons.length);




            // console.log(buttonClicked);



            // updateBagNoItems();
        })


    }
}

// updateBagNoItems();

function updateBagNoItems() {

    // var Item_In_bag = document.getElementsByClassName('Item-In-bag');
    // console.log(Item_In_bag);
    // console.log(Item_In_bag.length);

    var No_of_items_disp_sec = document.getElementsByClassName('No_of_items');



    // console.log(No_of_items_disp_sec);

    for (var i = removeBagItemButtons.length - 1; i >= 0; i--) {

        No_of_items_disp_sec[0].innerHTML = `${No_of_items_disp_sec[i].innerHTML.replace('1', removeBagItemButtons.length)}`
    }
}

// No_of_items[0].innerText.replace('.', Item_In_bag.length);

// buttonClicked.

// var No_of_items_contents = `<h5 class="No_of_items">
//                     Items &nbsp; : &nbsp; ${No_of_items_value.length}
//                 </h5>`

// inner_sec_02

// No_of_items_disp_sec = No_of_items_disp_sec[0].innerText.replace('1', Item_In_bag.length);

// console.log(No_of_items_disp_sec);

// No_of_items_disp_sec.content = No_of_items_disp_sec[0].innerText.replace('1', Item_In_bag.length);

// No_of_items_disp_sec.append(Item_In_bag);