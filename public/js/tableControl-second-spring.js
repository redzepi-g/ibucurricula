$(document).ready(function(){

    //initialize count
    let courseCount = 0;

    //get addCourse button
    let btnAddCourse = document.getElementById("add-course");
    let btnRemoveCourse = document.getElementById("remove-course");

    //get the form row
    let courseRow = document.getElementById("course-row");


    //add course body
    function addCourse(courseCount){

        //create the card div
        let course = document.createElement("div");
        course.setAttribute("class","card");
        course.setAttribute("id",`course-${courseCount}`);
        course.setAttribute("style","width:18rem;");

        //create the img div
        let img = document.createElement("img");
        img.setAttribute("class","card-img-top");
        img.setAttribute("src", "http://via.placeholder.com/286x180");
        img.setAttribute("id","course-img-id");
        img.setAttribute("alt","Course image");

        //create the card body
        let body = document.createElement("div");
        body.setAttribute("class","card-body text-center");
        body.setAttribute("id","course-body-id");

        //create the input select 
        let input = document.createElement("select");
        input.setAttribute("class","form-control");
        input.setAttribute("name","course[]");

        //populate the select
        //get the api data
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost/ibucurricula/public/api/department-1', 
            data: { get_param: 'value' }, 
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                    
                    if(element.semester == 'spring' && element.year == '2'){
                        let option = document.createElement("option");
                        option.setAttribute("value", element.id);
                        option.innerHTML = element.name;
                        input.appendChild(option);
                    }
                    
                });
            }
        });

        //put together the card
        body.appendChild(input);
        course.appendChild(img);
        course.appendChild(body);


        //append the card to row
        courseRow.appendChild(course);


    }

    //remove course
    function removeCourse(){

     let course = document.getElementById(`course-${courseCount-1}`);
     course.remove();
     

    }

    btnAddCourse.addEventListener("click", function(){

        addCourse(courseCount);
        courseCount++;
    });

    btnRemoveCourse.addEventListener("click", function(){

        removeCourse(courseCount);
        courseCount--;
    });
    
});
