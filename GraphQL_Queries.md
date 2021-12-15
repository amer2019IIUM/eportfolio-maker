```graphql
# Write your query or mutation here

# Create Project
mutation {
    createProject(
        input: {
            title: "String!"
            lang: "String!"
            desc: "String!"
          	used_technologies:["SQL"]
            progress: 50
            source_code: "String!"
            icon: "String!"
            user: { connect: 1 }
            attachments: { create: { title: "Project title", link: "https://lighthouse-php.com/logo.svg", type: PHOTO } }
        }
    ) {
        id
    }
}

# update Project
mutation {
    updateProject(id:1
        input: {
            title: "String!"
            lang: "String!"
            desc: "String!"
          	used_technologies:["SQL"]
            progress: 50
            source_code: "String!"
            icon: "String!"
             attachments: { create:[ { title: "Project title", link: "https://lighthouse-php.com/logo.svg", type: PHOTO }]
            delete:[1]}
        }
    ) {
        id
    }
}

# Create Profile
mutation {
    createProfile(
        input: {
            first_name: "Amer"
            last_name: "Saleh"
            lang: "Eng"
            country: "Yemen"
            city: "IBB"
            nationality: "Yemen"
            summary: "Develop"
            headline: "Developer"
            user: { connect: 1 }
            attachments: {
                create: {
                    title: "Profile tile"
                    link: "https://lighthouse-php.com/logo.svg"
                    type: PHOTO
                }
            }
        }
    ) {
        id
    }

# Update Profile
mutation {
    updateProfile(id:1
        input: {
            first_name: "Amer"
            last_name: "Saleh"
            lang: "Eng"
            country: "Yemen"
            city: "IBB"
            nationality: "Yemen"
            summary: "Develop"
            headline: "Developer"
             attachments: {
                create: [{
                    title: "Profile tile"
                    link: "https://lighthouse-php.com/logo.svg"
                    type: PHOTO
                }]
            delete:[18]
            }
        }
    ) {
        id
  }
  }
# Create Skill
mutation{
   createSkill(input:{
    title:"New skill"
    type:"Professional"
    lang:"Eng"
    sort:0
    percentage:20
    user:{
      connect:1
    }
  }){
    id
  }
}

# Create User
mutation{
  createUser(input:{
    email:"amer23zx@gmail.com"
    linkedin:"linkedIn.com"
    twitter:"twitter.com"
    facebook:"facebook.com"
    github:"github.com"
    phone_no:"+601121288754"
    dribbble:"dribbble.com"
  }){
    id
  }
}
```
