const users = [
  { name: "Ampara", link: "foodsite.php" },
  { name: "batticaloa", link: " battirest.php" },
    { name: "Trincomalee", link: "trincmalee.php" },
  { name: "colombo", link: "colombu.php" },
  { name: "kurunagala", link: "kurunagal.php" },
  { name: "Kandy", link: "kandy.php" },
  { name: "budulla", link: "badulla.php" },
  { name: "nuweraliya", link: "nuweraliya.php" },
  { name: "jafna", link: "jafna.php" },
  { name: "vavuniya", link: "vavuniya.php" },
  { name: "kaluthura", link: "kaluthura" },
  
];

function searchUser() {
  const searchInput = document.getElementById("searchInput").value.trim().toLowerCase();
  const searchResult = document.getElementById("searchResult");

  if (searchInput === "") {
    searchResult.innerHTML = `<h2>Please enter a  area name to search.</h2>`;
    return;
  }

  const user = users.find(u => u.name.toLowerCase() === searchInput);
  if (user) {
    searchResult.innerHTML = `<p>The Restuarent area is : ${user.name}</p><a href="${user.link}" >   <button id="button"> ${user.name} </button></a> `;
  } else {
    searchResult.innerHTML = "No restuarent found with that name.";
  }
}
