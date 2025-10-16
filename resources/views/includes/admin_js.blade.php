<script>
    //index.js

// let menuicn = document.querySelector(".menuicn");
// let nav = document.querySelector(".navcontainer");

// menuicn.addEventListener("click", () => {
//     nav.classList.toggle("navclose");
// });


$('.app_toggler').on('click',function(){
    let toggle_element = $(`#${$(this).attr('data-appToggle')}`);
    if($(this).hasClass('active')){
        $(toggle_element).hide();
    } else{
        $(toggle_element).show();
    }
    $(this).toggleClass('active');
    
    // toggleElement(toggle_element);
});



</script>