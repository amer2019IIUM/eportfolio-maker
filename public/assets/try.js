fetch('http://127.0.0.1:8000/graphql', {
    method: 'POST',
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
        query: `
        query{
            users{
              data{
                id
                email
              }
            }
          }
        `
    })
}).then(res => res.json()).then(data => {
    console.log(data.data.users.data);
})