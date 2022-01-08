const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

/*home*/
sr.reveal('.img',{})
sr.reveal('.name',{delay:300})
sr.reveal('.web',{delay:400})
sr.reveal('.icon' ,{delay:500})
sr.reveal('.tombol',{delay:600})

/*about*/
sr.reveal('.about_title',{})
sr.reveal('.about-img',{origin:'left',delay:400})
sr.reveal('.about-txt',{origin:'right',delay:400})

/*skill*/
sr.reveal('.skill-title',{})
sr.reveal('.ikon',{origin:'left',delay:200,interval:100})

/*project*/
sr.reveal('.project-title',{})
sr.reveal('.kard',{origin:'bottom',delay:300,interval:100})

/*contact*/
sr.reveal('.contact-title',{})
sr.reveal('.form-contact',{origin:'bottom',delay:400,interval:100})
