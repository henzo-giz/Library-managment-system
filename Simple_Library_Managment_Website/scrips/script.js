function validateForm() {
    var student_id = document.forms["form"]["student_id"].value;
    var title = document.forms["form"]["title"].value;
    var name = document.forms["form"]["name"].value;
    var book_id = document.forms["form"]["book_id"].value;
    var issued_date = document.forms["form"]["issued_date"].value;
    var return_date = document.forms["form"]["return_date"].value;
  
    if (student_id === "") {
      alert("ID must be filled out");
      return false;
    }
  
    if (title === "") {
      alert("Title must be filled out");
      return false;
    }
  
    if (name === "") {
      alert("Name must be filled out");
      return false;
    }

    if (book_id === "") {
      alert("Book ID must be filled out");
      return false;
    }

    if (issued_date === "") {
      alert("Issued date must be filled out");
      return false;
    }

      if (return_date === "") {
      alert("Return date must be filled out");
      return false;
    }
  
    // Add additional validation rules as needed
  
    // Form is valid
    return true;
  }
  