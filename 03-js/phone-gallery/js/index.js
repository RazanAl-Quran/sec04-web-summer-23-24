function displayBluePurple () {
    let allBluePurple = document.querySelectorAll("input[name='color']");
    console.log('allBluePurple',allBluePurple);


    if(allBluePurple[0].checked) {
        // blue
        document.querySelector('#purple-div').style.display = 'none';
        document.querySelector('#blue-div').style.display = 'block';

        let allBlueImgs = document.querySelectorAll('#blue-div img');
        console.log('allBlueImgs',allBlueImgs);

        allBlueImgs.forEach(function(item) {
            item.addEventListener('mouseover', function(){
                document.querySelector('#bigimg1').src = item.src;
            } );
        });
        

    } else if(allBluePurple[1].checked) {
        // purple
        document.querySelector('#blue-div').style.display = 'none';
        document.querySelector('#purple-div').style.display = 'block';

        // do it plz
    }

}
