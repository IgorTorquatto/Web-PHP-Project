logoutButton = document.getElementById('logoutButton');

logoutButton.addEventListener('click',()=>{
    const confirmLogout = confirm("Você realmente deseja se desconectar?");
    if(confirmLogout){
        fetch('logout.php',{ method: 'POST'}).then(()=>{
            window.location.replace('index.html');
        })
        .catch((error)=>{
            console.error("Erro ao deslogar: ", error);
            alert("Ocorreu um erro ao desconectar. Tente novamente");
        });
    }
});