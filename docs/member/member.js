// Récupération des éléments du DOM
const container = document.querySelector('.container');
const logoutLink = document.querySelector('a');
// Ajout d'un écouteur d'événement sur le lien de déconnexion
logoutLink.addEventListener('click', (e) => {
  // Empêcher le lien de rediriger vers la page de déconnexion
  e.preventDefault();
  // Envoi d'une requête AJAX pour se déconnecter
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'logout.php');
  xhr.send();
  // Redirection vers la page d'accueil une fois la déconnexion effectuée
  xhr.onload = () => {
    if (xhr.status === 200) {
      window.location.href = 'index.php';
    }
  };
});