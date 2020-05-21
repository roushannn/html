const app = document.getElementById('root')

const logo = document.createElement('img')
logo.src = 'logo.png'

const container = document.createElement('div')
container.setAttribute('class', 'container')

app.append(logo)
app.append(container)

//Create a request variable and assign a new XMLHttpRequest object to it
var request = new XMLHttpRequest()

//Open a new connection, using the GET request on the URL endpoint
request.open('GET', 'http://ghibliapi.herokuapp.com/films', true)

request.onload = function() {
	//Begin accessing JSON data here
	var data = JSON.parse(this.response)

	if (request.status == 404 || request.status == 400) {
		console.log('error')
	}
	else {
		data.forEach(movie => {
			const card = document.createElement('div')
			card.setAttribute('class', 'card')

			const h1 = document.createElement('h1')
			h1.textContent = movie.title

			const h4 = document.createElement('h4')
			h4.textContent = movie.release_date

			const p = document.createElement('p')
			if (movie.description.length > 300) {
				movie.description = movie.description.substring(0, 300)
				p.textContent = `${movie.description}...`
			}
			else {
				p.textContent = `${movie.description}`
			}

			app.append(card)
			app.append(h1)
			app.append(h4)
			app.append(p)
		})
	}

}

//Send request
request.send()

