const search = document.querySelector(".search-input");
const inputbox = search.querySelector("input");
const suggestbox = search.querySelector("autocom-box");

inputbox.onkeyup = (e) => {
    let userdata = e.target.value;
    let emptyArray = [];
    if(userdata)
    {
        emptyArray = suggest.filter((data) => {
            return data.toLocaleLowerCase().startsWith(userdata.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            return data ='<li>'+ data +'</li>'; 
        });
        console.log(emptyArray);
    }
    else
    {

    }
    showSuggest(emptyArray);
}
function showSuggest(list)
{
    let listData;
    if(!list.length)
    {

    }
    else
    {
        listData = list.join('');
    }
    suggestbox.innerHTML = listData;
}