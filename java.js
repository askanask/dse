let availablekey =[
    'ampare',
    'batticaloa',
    'trincomalee',
    'colombo',
    'kurunagala'
];
const results_box =document.querySelector('.results_box');
const inputBox =document.querySelector('search');


inputBox.onkeyup = function() { 
    let results = [];
    let input = inputBox.value;
    if (input.length){
        results = availablekey.filter((keyword) => {
            return keyword.toLowerCase().includes(input.toLowerCase()); 
        });
        console.log(results);
        display(results); 
        results_box.innerHTML = ''; 
    }
};

function display(results) {
    const content = results.map((list) => {
        return "<li>" + list + "</li>";
    }).join(''); 

    results_box.innerHTML = content; 
}
