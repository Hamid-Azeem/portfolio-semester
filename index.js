document.addEventListener("DOMContentLoaded", function () {
  const hamBtn = document.querySelector(".hamburger");
  const mainB = document.querySelector("main");
  const nav = document.querySelector("header");
  const aside=document.querySelector("aside")

    const emailBox=document.querySelector(".email-box")
    const formContainer=document.querySelector(".form-container")
    const closeForm=document.querySelector(".cancel-form")

  const closeBtn = document.querySelector(".close-btn");
  closeBtn.addEventListener("click", () => {
    mainB.classList.toggle("main-margin");
    nav.classList.toggle("close-onPhone");
    aside.classList.toggle("close-aside");
  });
  hamBtn.addEventListener("click", () => {
    mainB.classList.toggle("main-margin");
    nav.classList.toggle("close-onPhone");
    aside.classList.toggle("close-aside");
    
  });


  emailBox.addEventListener("click",()=>{
    formContainer.classList.add("active")
  })
  closeForm.addEventListener("click",()=>{
    formContainer.classList.remove("active")
  })




});
