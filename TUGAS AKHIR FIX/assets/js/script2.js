function cari(e) {
    e.preventDefault()

    const key = document.getElementById('search').value
    console.log(key)
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': '402091000amshf52cc368eb36f29p1efd37jsn68f33b70e1b6',
        'X-RapidAPI-Host': 'webtoon.p.rapidapi.com',
        'User-Agent':'Mozilla/5.0 (Linux; Android 8.1.0; Mi MIX 2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Mobile Safari/537.36'
      }
    };
    fetch(`https://webtoon.p.rapidapi.com/canvas/search?query=${key}&startIndex=0&pageSize=20&language=en`, options)
      .then(response => response.json())
      .then(response =>{
        let komik = response.message.result.challengeSearch.titleList
        console.log(komik)
     let u = komik.slice(0,10);
  
     console.log(u)
      let novel = response;
      let list_novels = document.querySelector('.histori')
      isi = ""
      u.forEach(el => {
        let gambar =  "http://webtoon-phinf.pstatic.net"+el.thumbnail
        console.log(gambar)
        let tile = el.title.slice(0,20)
        console.log(el.title)
        isi+=`
        <div class="gambar">
        <img src="${gambar}" />
        <p>${el.title}</p>
        </div>
        `
      });
      list_novels.innerHTML = isi
    })
     
      

      // )
      .catch(err => console.error(err));

}
