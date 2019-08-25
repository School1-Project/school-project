<template>
   <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <template v-for="grade in grades">
        <table1 :title = "getClassName(grade)" :info = "getInfo(grade)">
            <template v-slot:thead>
               <thead>
                    <tr>
                        <th>Day</th>
                        <template v-for = "period in periods">
                            <th>
                                {{ period.name }}
                            </th>
                        </template>
                    </tr>
                </thead>
            </template>
            <template v-slot:tbody>
                <tbody >
                    <template v-for = "(day,key) in days">
                        <tr>
                            <td>
                                {{ key }}
                            </td>
                            <template v-for = "(routine,key) in day">
                                <template v-for = "period in periods">
                                    <td v-if = "routine.class_id === grade.id && routine.period_id === period.id">
                                        {{ routine.subject_name }}
                                    </td>
                                </template>
                            </template>
                        </tr>
                    </template>
                </tbody>
            </template>
        </table1>
    </template>
   </div>
</template>

<script>
    import Table1 from './table1'
    export default {
        components : {
          'table1' : Table1,   
        },
        mounted() {
            this.getGrades();
            this.getPeriods();
            this.getClassRoutines();
        },
        data() {
            return {
                grades: [],
                periods : [],
                days : {
                    Sunday : [],
                    Monday : [],
                    Tuesday : [],
                    Wednesday : [],
                    Thursday : [],
                    Friday : [],
                    Saturday : [],
                }
            }
        },
        methods : {
            getGrades() {
                this.axios.get('api/grades').then((response) => {
                    this.setGrades(response.data.grade)
                })
            },
            setGrades(grades) {
                let self = this;
                   $.each(grades, function(key,grade) {
                     let data = {
                        name : grade.name,
                        id : grade.id,
                     };
                     self.grades.push(data);
                   });
            },
            getPeriods() {
                this.axios.get('api/periods').then((response) => {
                    this.setPeriods(response.data.period)
                })
            },
            setPeriods(periods) {
                let self = this;
               $.each(periods, function(key,period) {
                 let data = {
                    id : period.id,
                    name : period.name,
                    from : period.from,
                    to : period.to,
                 };
                 self.periods.push(data);
               });
            },
            getClassRoutines() {
                this.axios.get('api/class/routines').then((response)=>{
                    this.setClassRoutines(response.data.routines)
                });
            },
            setClassRoutines(routines) {
                let self = this;
                $.each(self.grades,function(key,grade) {
                    $.each(self.periods,function(key1,period) {
                        for(let i =1;i<8;i++) {
                            let data = {
                                class_id : grade.id,
                                class_name : grade.name,
                                subject_name : '',
                                teacher_name : '',
                                period_id : period.id,
                                day_id : i,
                            };
                            if(i === 1)
                                self.days.Sunday.push(data);
                            if(i === 2)
                                self.days.Monday.push(data);
                            if(i === 3)
                                self.days.Tuesday.push(data);
                            if(i === 4)
                                self.days.Wednesday.push(data);
                            if(i === 5)
                                self.days.Thursday.push(data);
                            if(i === 6)
                                self.days.Friday.push(data);
                            if(i === 7)
                                self.days.Saturday.push(data);
                        }

                    });
                });                    
                $.each(routines,function(key,routine) {
                    switch(routine.day_id) {
                        case 1 :         
                            $.each(self.days.Sunday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });                
                            break;
                        case 2 : 
                             $.each(self.days.Monday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });

                            break;  
                        case 3 : 
                             $.each(self.days.Tuesday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });  
                            break;
                        case 4 : 
                             $.each(self.days.Wednesday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            }); 
                            break;
                        case 5 : 
                             $.each(self.days.Thursday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });  
                            break;
                        case 6 : 
                            $.each(self.days.Friday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });  
                            break;
                        case 7 : 
                             $.each(self.days.Sunday,function(key,obj) {
                                if(obj.class_id === routine.class_id && obj.period_id === routine.period_id && obj.day_id === routine.day_id) {
                                    obj.subject_name = 'English';
                                    obj.teacher_name = 'MKG';
                                }

                            });  
                            break;
                    }
                });
            },
            getClassName(grade) {
                return 'Class ' + grade.name;
            },
            getInfo(grade) {
                return 'This is the routine of class ' + grade.name + '.Please double click to edit the routine.';
            }
        },
    }
</script>
