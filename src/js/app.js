const hamburger = document.querySelector('#hamburger')
const contentList = document.querySelector('.action-user-contentList')

if(hamburger){
    hamburger.addEventListener('click', function(){
        
        contentList.classList.toggle('hide')
    })
}