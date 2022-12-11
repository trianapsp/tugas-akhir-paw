let id_comic =URLSearchParam.get('id')
console.log(id_comic)
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '402091000amshf52cc368eb36f29p1efd37jsn68f33b70e1b6',
		'X-RapidAPI-Host': 'anime-db.p.rapidapi.com'
	}
};

fetch(`https://anime-db.p.rapidapi.com/anime/by-id/${id_comic}`, options)
	.then(response => response.json())
	.then(response => {
        console.log(response)
        let sinopsis = '';
        let isi =''
        sinopsis+=response.synopsis
        console.log(sinopsis)
        if(sinopsis!=''){
            isi+=`${response.synopsis}
            `
            document.getElementById('isi_sinopsis').innerHTML=`${isi}
            <div class="love">
                <a href="favorite.php?id_comic=${response._id}&title=${response.title}">
                    <i class="fa-solid fa-heart"></i>
                </a>
            </div>
    <center>[Synopsis Not Available]</center>`
            let gambar = ''
            gambar+=`${response.image}
            `
            document.getElementById('pict_book').innerHTML=`
            <img src=${gambar} alt="Gambar Tumpukan Buku">`
    }else{
            document.getElementById('isi_sinopsis').innerHTML=`
            <div class="love">
                <a href="favorite.php?id_comic=${response._id}&title=${response.title}">
                    <i class="fa-solid fa-heart"></i>
                </a>
            </div>
    <center>[Synopsis Not Available]</center>`
            let gambar = ''
            gambar+=`${response.image}
            `
            document.getElementById('pict_book').innerHTML=`
            <img src=${gambar} alt="Gambar Tumpukan Buku">`
    }

       
       
    })
	.catch(err => console.error(err));