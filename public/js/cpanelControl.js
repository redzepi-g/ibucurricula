$(document).ready(function(){

    let btnStaff = document.getElementById("btn-manage-staff");
    let btnCourses = document.getElementById("btn-manage-courses");
    let btnCurriculum = document.getElementById("btn-manage-curriculum");
    let selected_p = document.getElementById("selected-p");
    let form = document.getElementById("index-form");

    btnStaff.addEventListener("click",function(){

        form.setAttribute("action","http://localhost/ibucurricula/public/cpanel-staff");
        selected_p.innerHTML = "Currently Selected: Manage Staff";
    });

    btnCourses.addEventListener("click",function(){
        
        form.setAttribute("action","http://localhost/ibucurricula/public/cpanel-courses");
        selected_p.innerHTML = "Currently Selected: Manage Courses";
    });

    btnCurriculum.addEventListener("click",function(){
        form.setAttribute("action","http://localhost/ibucurricula/public/cpanel-curriculum");
        selected_p.innerHTML = "Currently Selected: Manage Curriculum";
    });
});