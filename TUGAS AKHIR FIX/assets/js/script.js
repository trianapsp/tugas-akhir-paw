function cari(e) {
    e.preventDefault()

    const key = document.getElementById('search').value
    console.log(key)
  const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '402091000amshf52cc368eb36f29p1efd37jsn68f33b70e1b6',
		'X-RapidAPI-Host': 'upcoming-light-novels.p.rapidapi.com'
	}
};
let list_novels = document.querySelector('.histori')
fetch(`https://upcoming-light-novels.p.rapidapi.com/lns/${key}`, options)
	.then(response => response.json())
	.then(response => {console.log(response)
    isi=''
    gets = response.slice(0,10)
      gets.forEach(ee => {
        tile = ee.title.slice(0,10)
        console.log(ee.title)
        isi+=`
        <div class="gambar">
        <img src="${ee.img}" />
        <p>${tile}</p>
        </div>
        `
      });
      list_novels.innerHTML = isi
      }

      )
      .catch(err => console.error(err));
    }
