import './bootstrap';

	
// Import our custom CSS
import '~resources/scss/app.scss'
import '~bootstrap/js/index.esm.js'

// precompilazione immagini
import.meta.glob([
    '../img/**'
])