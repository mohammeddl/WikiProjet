function clickHiddenProject(id) {
    formHidden = document.getElementById("fromHidden");
    if (formHidden.style.display === 'none') {
      formHidden.style.display = "block";
    } 

    // let projectId = document.getElementById('projectId' + id).value;
    // let name = document.getElementById('projectName' + id).innerText;
    // let desc = document.getElementById('projectDesc' + id).innerText;
    // let startDate = document.getElementById('startDate' + id).innerText;
    // let endDate = document.getElementById('endDate' + id).innerText;



    // document.getElementById('project_id2').value = projectId;
    // document.getElementById('projectNamee2');
    // document.getElementById('projectDescription2').value = desc;
    // document.getElementById('start_date2').value = startDate;
    // document.getElementById('end_date2').value = endDate;


  }

  function hidePopupEdit(){
    formHidden = document.getElementById("fromHidden");
    if (formHidden.style.display === 'block') {
      formHidden.style.display = "none";
    }
  }