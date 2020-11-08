// init params
const addForm = document.getElementById("add-user-form");
const editForm = document.getElementById("edit-user-form");
const message = document.getElementById("showMessage");
const trow = document.querySelector("tbody");
const addModel = new bootstrap.Modal(document.getElementById("exampleModal"));
const editModel = new bootstrap.Modal(document.getElementById("editUserModal"));

// get all data using ajax

const fetchAllUser = async () => {
  const data = await fetch("action.php?read=1", {
    method: "GET",
  });
  const response = await data.text();
  trow.innerHTML = response;
};

fetchAllUser();

// add new user
addForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(addForm);
  formData.append("add", 1);

  if (addForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    addForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("add-user-btn").value = "please wait........";
    const data = await fetch("action.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();
    message.innerHTML = response;
    document.getElementById("add-user-btn").value = "Submit";
    addForm.reset();
    addForm.classList.remove("was-validated");
    addModel.hide();
    fetchAllUser();
  }
});

// add event listener on edit button click
trow.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.editLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    // console.log(id);
    editUser(id);
  }
});

// get user value by id
const editUser = async (id) => {
  const data = await fetch(`action.php?edit=2&id=${id}`, {
    method: "GET",
  });

  const response = await data.json();

  document.getElementById("id").value = response.id;
  document.getElementById("fnameEdit").value = response.first_name;
  document.getElementById("lnameEdit").value = response.last_name;
  document.getElementById("emailEdit").value = response.email;
  document.getElementById("phoneEdit").value = response.phone;
};

// update user value
editForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(editForm);
  formData.append("update", 1);

  if (editForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    editForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("edit-user-btn").value = "please wait........";
    const data = await fetch("action.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();
    message.innerHTML = response;
    document.getElementById("edit-user-btn").value = "Submit";
    editForm.reset();
    editForm.classList.remove("was-validated");
    editModel.hide();
    fetchAllUser();
  }
});

// add event listener on delete button click

trow.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.deleteLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    // console.log(id);
    deleteUser(id);
  }
});

// delete user
const deleteUser = async (id) => {
  console.log("id", id);
  const data = await fetch(`action.php?delete=2&id=${id}`, {
    method: "GET",
  });

  const response = await data.text();
  message.innerHTML = response;
  console.log(response);
  fetchAllUser();
};
