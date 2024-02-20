const fullCalendarElement = document.querySelector('full-calendar')

fullCalendarElement.options = {
    locale: 'es',
    themeSystem: 'bootstrap5',
    headerToolbar: {
        "start": 'today prev,next',
        "center": "title",
        "end": "dayGridMonth,dayGridWeek,dayGridDay"
    },
    height: 530,
    events: [
        { // this object will be "parsed" into an Event Object
            title: 'Socialización empalme', // a property!
            start: '2022-08-04', // a property!          
        },
        { // this object will be "parsed" into an Event Object
        title: 'Cierre plataforma PIT', // a property!
        start: '2022-08-05', // a property!          
        },
        { // this object will be "parsed" into an Event Object
            title: 'Planeación y seguimiento PAI del segundo trimestre', // a property!
            start: '2022-08-05', // a property!                
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre de nómina', // a property!
            start: '2022-08-10', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Formulación PICIA 2023 - 2026', // a property!
            start: '2022-08-11', // a property!
            end: '2022-08-13' // a property! ** see important note below about 'end' **
        },
        { // this object will be "parsed" into an Event Object
            title: 'Seguimiento CAP', // a property!
            start: '2022-08-17', // a property!            
        }, 
        { // this object will be "parsed" into an Event Object
            title: 'Pausa activa', // a property!
            start: '2022-08-17', // a property!            
        },           
        { // this object will be "parsed" into an Event Object
            title: 'Café Cultura', // a property!
            start: '2022-08-18', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre contable', // a property!
            start: '2022-08-19', // a property!            
        },                      
        { // this object will be "parsed" into an Event Object
            title: 'Club de lectura', // a property!
            start: '2022-08-19', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Pausa cognitiva', // a property!
            start: '2022-08-24', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Capacitación gestión del riesgo', // a property!
            start: '2022-08-30', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre de nómina', // a property!
            start: '2022-09-09', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre contable', // a property!
            start: '2022-09-20', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre plataforma PIT', // a property!
            start: '2022-09-09', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Lanzamiento observatorio', // a property!
            start: '2022-09-14', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Café Cultura', // a property!
            start: '2022-09-22', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Inicio Escuela de liderazgo', // a property!
            start: '2022-09-07', // a property!   
            end: '2022-09-09' // a property! ** see important note below about 'end' **         
        },
        { // this object will be "parsed" into an Event Object
            title: 'Taller formulación POA', // a property!
            start: '2022-09-20', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre de nómina', // a property!
            start: '2022-10-13', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre contable', // a property!
            start: '2022-10-20', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Socialización Dirección', // a property!
            start: '2022-10-18', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Lanzamiento Expedición Montes de María', // a property!
            start: '2022-10-14', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Café Cultura', // a property!
            start: '2022-10-20', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Taller Riesgos de corrupción', // a property!
            start: '2022-10-31', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre de nómina', // a property!
            start: '2022-11-11', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre contable', // a property!
            start: '2022-11-19', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Webinar OTCA', // a property!
            start: '2022-11-04', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Socialización visor I2D', // a property!
            start: '2022-11-17', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Curso Gestión de riesgos de corrupción', // a property!
            start: '2022-11-08', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Curso Gestión de riesgos de corrupción', // a property!
            start: '2022-11-15', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Curso Gestión de riesgos de corrupción', // a property!
            start: '2022-11-22', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre contable 17 de marzo', // a property!
            start: '2023-03-17', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Cierre de novedades de nómina 13 de marzo ', // a property!
            start: '2023-03-13', // a property!            
        },
        { // this object will be "parsed" into an Event Object
            title: 'Evento Conversaciones Humboldt - Dirección Financiera y Administrativa ', // a property!
            start: '2023-03-16', // a property!            
        }
    ],
    eventClick: function(info) {
        info.jsEvent.preventDefault(); // don't let the browser navigate
    
        if (info.event.url) {
          window.open(info.event.url);
        }
      }
}