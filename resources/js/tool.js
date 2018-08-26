Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'admin-notes',
            path: '/admin-notes',
            component: require('./components/AdminNotes'),
        },
    ])
})
