const startDate = document.getElementById('start_date')
const endDate = document.getElementById('end_date')
const btn = document.getElementById('button')



// alert(startDate)
btn.addEventListener('click', function(){
    let start_date = new Date(startDate.value) 
    let end_date = new Date(endDate.value)
    let s_year = start_date.getFullYear() * 12
    let s_month = start_date.getMonth() + 1
    let e_year = end_date.getFullYear() * 12
    let e_month = end_date.getMonth() + 1
     let duration = s_year - e_month
    // console.log(startDate.getFullYear);
    // alert('i have been clicked')
    console.log(s_year);
    console.log(e_year);
    console.log((e_year + e_month)-(s_year + s_month));
})