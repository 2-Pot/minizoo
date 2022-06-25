class User{
    constructor(email, password){
        this.email=email;
        this.password=password;
    }
}
console.log(User);

sessionStorage.User('User', data);
var User= sessionStorage.User('User');