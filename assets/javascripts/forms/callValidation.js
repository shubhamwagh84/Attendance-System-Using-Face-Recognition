$(document).ready(function(){
    // validating department id
    $('.add_department_id').keyup(function(){
        let result = checkEmpty($('.add_department_id').val());
        if(result){
            $('.noerror_department').show();
            $('.error_department').hide();
         
        }
        else{
            $('.noerror_department').hide();
            $('.error_department').text('Department ID cannot be empty!');
            $('.error_department').show();
        
        }
    });

    // validating department
    $('#add_department_name').keyup(function(){
        let result = checkAlpha($('#add_department_name').val());
        if($('#add_department_name').val().length < 1){
            $('#noerror_department_name').hide();
            $('#error_department_name').hide();
            return false;
        }
        if(result){
            $('#noerror_department_name').show();
            $('#error_department_name').hide();
        
         
        }
        else{
            $('#noerror_department_name').hide();
            $('#error_department_name').text('Department name should contains letters only!');
            $('#error_department_name').show();
        }
    });

    // validate academic year

    $('.add_academic_year').keyup(function(){
        let currentYear = new Date();
        let result = checkNumbers($('.add_academic_year').val());
        if($('.add_academic_year').val().length < 1){
            $('.noerror_academic_year').hide();
            $('.error_academic_year').hide();
            return false;
        }
        if(result){
            if($('.add_academic_year').val() >= 1999 && $('.add_academic_year').val() <= currentYear.getFullYear()){
                $('.noerror_academic_year').show();
                $('.error_academic_year').hide();
            }
            else{
                $('.noerror_academic_year').hide();
                $('.error_academic_year').text('Academic Year should between 1999 to '+currentYear.getFullYear());
                $('.error_academic_year').show(); 
            }
            
        }
        else{
            $('.noerror_academic_year').hide();
            $('.error_academic_year').text('Numbers are allowed only!');
            $('.error_academic_year').show();
        }
    });

    // validate semester
    $('.add_semester').keyup(function(){
        console.log('hi');
        if($('.add_semester').val() >= 1 && $('.add_semester').val() <= 8){
            $('.noerror_semester').show();
            $('.error_semester').hide(); 
        }
        else{
            $('.noerror_semester').hide();
            $('.error_semester').text('Semester should between 1 to 8');
            $('.error_semester').show();
        }
    });

    // validating division

    $('.add_division').keyup(function(){
        let result = checkEmpty($('.add_division').val());
        if(result){
            $('.noerror_division').show();
            $('.error_division').hide();
         
        }
        else{
            $('.noerror_division').hide();
            $('.error_division').text('Division cannot be empty!');
            $('.error_division').show();
        
        }
    });

    // validating Batch
    $('.add_batch').keyup(function(){
        let result = checkEmpty($('.add_batch').val());
        if(result){
            $('.noerror_batch').show();
            $('.error_batch').hide();
         
        }
        else{
            $('.noerror_batch').hide();
            $('.error_batch').text('Batch cannot be empty!');
            $('.error_batch').show();
        
        }
    });

    // validating student rollno

    $('.add_roll').keyup(function(){
        let result = checkEmpty($('.add_roll').val());
        if(result){
            $('.noerror_roll').show();
            $('.error_roll').hide();
         
        }
        else{
            $('.noerror_roll').hide();
            $('.error_roll').text('RollNo cannot be empty!');
            $('.error_roll').show();
        
        }
    });

    // validating faculty id

    $('.add_faculty_id').keyup(function(){
        let result = checkEmpty($('.add_faculty_id').val());
        if(result){
            $('.noerror_faculty').show();
            $('.error_faculty').hide();
         
        }
        else{
            $('.noerror_faculty').hide();
            $('.error_faculty').text('faculty ID cannot be empty!');
            $('.error_faculty').show();
        
        }
    });

});