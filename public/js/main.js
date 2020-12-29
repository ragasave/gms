
document.querySelector('.menu').style.display = '';
window.addEventListener('scroll', function(e) {
    // let h = window.innerHeight,
    // y = window.scrollY,
    // index = Math.ceil(y / h) - 1,
    // section = document.getElementsByTagName('section')[index];
    // if(y > h && y < h*2){
        
    // }


    // let sections = document.elementsFromPoint(0, 40);
    // let section = sections.find(function(elem) {
    //     return elem.classList.contains("mcw");
    // });
    // // if(section && section.classList.contains('mcw')){
    // if(section){
    //     document.querySelector('body').classList.add('hbw');
    // }else{
    //     document.querySelector('body').classList.remove('hbw');
    // }


    // title section
    let titleSection = document.querySelector('.subtitle-section');
    if(titleSection){
        let bottom = document.elementsFromPoint(0, window.innerHeight-1);
        let top = document.elementsFromPoint(0, 0);
        if(!titleSection.classList.contains('done') && (
            top.includes(titleSection) ||
            bottom.includes(titleSection)
        ) ){
            subTitleAnimation()
            titleSection.classList.add('done')
        }
    }
});






function subTitleAnimation(){
    var nodes, timer, index, darkNodes;
    nodes = document.querySelectorAll('.subtitle span');
    nodes = document.querySelectorAll('.subtitle span');
    darkNodes = document.querySelectorAll('.subtitle .txt-dark-mark');
    index = 0;
    timer = setInterval(function() {
        nodes[index].classList.add('text-amin');
        if(index == nodes.length-1){
            clearInterval(timer);
            index=0;
            timer = setInterval(function() {
                darkNodes[index].classList.add('txt-dark');
                if(index == darkNodes.length-1){
                    clearInterval(timer);
                }
                index++;
            }, 300);
        }else{
            index++;
        }
    }, 300);
}



// menu
document.querySelector('.header-menu-btn').addEventListener('click', function() {
    let menu = document.querySelector('body');
    menu.classList.toggle('menu-open');
})


document.querySelector('body').addEventListener('click', function(e){
    if(e.target.classList.contains('js-pd')){
        e.preventDefault()
    }
});