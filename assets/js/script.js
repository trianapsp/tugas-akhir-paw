function cari(e) {
    e.preventDefault()

    const key = document.getElementById('search').value
    console.log(key)
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': '402091000amshf52cc368eb36f29p1efd37jsn68f33b70e1b6',
        'X-RapidAPI-Host': 'anime-db.p.rapidapi.com'
      }
    };
    
    
let list_novels = document.querySelector('.histori')
fetch(`https://anime-db.p.rapidapi.com/anime?page=1&size=10&search=${key}&genres=Fantasy%2CDrama&sortBy=ranking&sortOrder=asc`, options)
      .then(response => response.json())
      .then(response => {
        console.log(response)
        tempat = ''
        response.data.forEach(element => {
          tempat+=`
          <div class="gambar">
            <img src="${element.image}" />
            <p>${element.title}</p>
          </div>
          `
        });
        document.querySelector('.histori').innerHTML = tempat

      })
      .catch(err => console.error(err));
  }
// fetch(`https://upcoming-light-novels.p.rapidapi.com/lns/${key}`, options)
// 	.then(response => response.json())
// 	.then(response => {console.log(response)
//     isi=''
//     gets = response.slice(0,10)
//       gets.forEach(ee => {
//         tile = ee.title.slice(0,10)
//         console.log(ee.title)
//         isi+=`
        // <div class="gambar">
        // <img src="${ee.img}" />
        // <p>${tile}</p>
        // </div>
//         `
//       });
//       list_novels.innerHTML = isi
//       }

//       )
//       .catch(err => console.error(err));
//     }


