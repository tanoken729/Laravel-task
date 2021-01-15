function changeDispley() {
    radio = document.getElementsByName('change-displey');
    // console.log(radio);
    let completes = document.querySelectorAll('.completed');
    // console.log(completes);
    let unCompletes = document.querySelectorAll('.unCompleted');
    // console.log(unCompletes);
    let tasks = document.querySelectorAll('.tasks');
    
    
      if(radio[1].checked) {
        unCompletes.forEach(item => {
          item.closest('.tasks').style.display = "";
        }); 
        completes.forEach(item => {
          item.closest('.tasks').style.display = "none";
        });
      } else if(radio[2].checked) {
        unCompletes.forEach(item => {
          item.closest('.tasks').style.display = "none";
        }); 
        completes.forEach(item => {
          item.closest('.tasks').style.display = "";
        });
      } else if(radio[0].checked) {
        tasks.forEach(item => {
          item.closest('.tasks').style.display = "";
        });
      }
    }
