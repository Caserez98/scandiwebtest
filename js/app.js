const typeElement = document.querySelector("#productType");
const form = document.querySelector("#product_form");
typeElement.addEventListener('change',(event) => {
let type = event.target.value;
    switch (type) {
        case 'DVD':
            $('#description').html(`
            <div class="form-group">

            <label for="size">Size</label>
            <input type="number" step="0.01" id="size" name="value[]" >
            </div>

            <p><b>Please, provide size in MB</b>
                </p>
            `);
            break;
        case 'Book':
            $('#description').html(`
            <div class="form-group">

            <label for="weight">Weight</label>
            <input type="number" step="0.01" id="weight"  name="value[]" >
            </div>
            <p><b>Please, provide weight in KG</b>
               </p>
        `);
            break;
        case 'Furniture':
            $('#description').html(`
            <div class="form-group">
            <label for="height">Height</label>
            <input type="number" step="1" id ="height" name="value[]" >
            </div>
            <div class="form-group">

            <label for="width">Width</label>
            <input type="number" step="1" id="width" name="value[]" >
            </div>
            <div class="form-group">

            <label for="length">Length</label>
            <input type="number" step="1" id="length" name="value[]" >
            </div>
            <p>
            <b>Please provide dimensions in HxWxL format</b>
            </p>
        `);
        break;
        default:
            $('#description').html('');
    }
});

