$(document).ready(function(){

    //initialize count
    let courseCount = 0;

    //get addCourse button
    let btnAddCourse = document.getElementById("add-course");

    //get the form row
    let courseRow = document.getElementById("course-row");

    //add course body
    function addCourse(courseCount){
        
        //remove the addCourse
        let dummyCourse = document.getElementById("dummy-course");
        dummyCourse.remove();

        //create the card div
        let course = document.createElement("div");
        course.setAttribute("class","card");
        course.setAttribute("id","course-id");
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
        let foreachOption = "{{$semester}}"

        input.innerHTML = foreachOption;

        //put together the card
        body.appendChild(input);
        course.appendChild(img);
        course.appendChild(body);


        //append the card to row
        courseRow.appendChild(course);
        
    }

    btnAddCourse.addEventListener("click", function(){

        addCourse(courseCount);
        courseCount++;
    });
    
});

/*

                <div class="card" id="course-id" style="width: 18rem;">
                        <img class="card-img-top" src="http://via.placeholder.com/286x180" id="course-img-id" alt="Card image cap">
                        <div class="card-body text-center" id="course-body-id">
                            <select class="form-control" name="course[]">
                                <option value="1">Course 1</option>
                            </select>
                        </div>
                </div>

                */