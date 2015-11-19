<h3>FICHA DE REGISTRO DEL ALUMNO</h3>
                @foreach($alumno as $d)
                <p>Fecha: <span>{{$d->created_at}}</span></p>
                <p>Grupo: <span>{{$d->grupo}}</span></p>
                <p>turno: <span>{{$d->turno}}</span></p>
                <p>Semestre: <span>{{$d->semestre}}</span></p>
                <p>Especialidad: <span>{{$d->carrera}}</span></p>

                @endforeach

                <h3>DATOS GENERALES DEL ALUMNO</h3>
                @foreach($alumno as $d)
                    <p>Nombre del alumno: <span>{{$d->nombres}}</span></p>
                    <p>edad: <span>{{$d->edad}}</span></p>
                    <p>Fecha de nacimiento: <span>{{$d->fecha_nacimiento}}</span></p>
                    <p>Sexo: <span>{{$d->sexo}}</span></p>
                    <p>Direccion: <span>{{$d->direccion}}</span></p>
                    <p>Colonia: <span>{{$d->colonia}}</span></p>
                    <p>Municipio: <span>{{$d->municipio}}</span></p>
                    <p>Estado: <span>{{$d->estado}}</span></p>
                    <p>CP: <span>{{$d->cp}}</span></p>
                    <p>Telefono: <span>{{$d->telefono}}</span></p>
                    <p>Email: <span>{{$d->mail}}</span></p>
                    <p>Estado Civil: <span>{{$d->estado_civil}}</span></p>

                @endforeach

                 <h3>ANTECEDENTES</h3>
                @foreach($antecedente as $d)
                    <p>La primaria la cursaste en escuela: <span>{{$d->la_primaria_la_cursaste_en_escuela}}</span></p>
                    <p>Promedio: <span>{{$d->promedio_primaria}}</span></p>
                    <p>La secundaria la cursaste en escuela: <span>{{$d->la_secundaria_la_cursaste_en_escuela}}</span></p>
                    <p>Promedio: <span>{{$d->promedio_secundaria}}</span></p>
                    <p>Para ingresar al nivel bachillerato tu peimera opcion fue: <span>{{$d->para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue}}</span></p>
                    <p>Porque elegiste ingresar a nuestro plantel: <span>{{$d->porque_elegiste_ingresar_a_nuestro_plantel}}</span></p>
                    <p>Padeces de alguna enfermedad o discapasidad <span>{{$d->padeces_de_alguna_enfermedad_o_discapasidad}}</span></p>
                    <p>¿Cual?: <span>{{$d->cual}}</span></p>
                    <p>Que medicamento tomas: <span>{{$d->que_medicamento_tomas}}</span></p>
                    <p>Con que frecuencia: <span>{{$d->con_que_frecuencia}}</span></p>
                    <p>¿Cuanto tiempo empleas para transladarte de tu domicilio al plantel?: <span>{{$d->tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel}}</span></p>
                                        
                @endforeach

                <h3>DATOS GENERALES DE LOS PADRES</h3>
                @foreach($padre as $d)
                    <p>Nombre del padre: <span>{{$d->nombres_p}}</span></p>
                    <p>Esta vivo: <span>{{$d->esta_vivo_p}}</span></p>
                    <p>Telefono: <span>{{$d->telefono_p}}</span></p>
                    <p>Edad: <span>{{$d->edad_p}}</span></p>
                    <p>Ocupacion: <span>{{$d->ocupacion_p}}</span></p>
                    <p>Escolaridad: <span>{{$d->escolaridad_p}}</span></p>
                    <p>Horario Laboral: <span>{{$d->horario_laboral_p}}</span></p>
                    <p>Nombre de la Madre: <span>{{$d->nombres_m}}</span></p>
                    <p>Esta vivo: <span>{{$d->esta_vivo_m}}</span></p>
                    <p>Telefono: <span>{{$d->telefono_m}}</span></p>
                    <p>Edad: <span>{{$d->edad_m}}</span></p>
                    <p>Ocupacion: <span>{{$d->ocupacion_m}}</span></p>
                    <p>Escolaridad: <span>{{$d->escolaridad_m}}</span></p>
                    <p>Horario Laboral: <span>{{$d->horario_laboral_m}}</span></p>
                    <p>¿Vives conb tus padres?: <span>{{$d->vives_con_tus_padres}}</span></p>
                    <p>Si tu respuesta es no ¿Con quien vives?: <span>{{$d->con_quien_vives}}</span></p>
                    <p>Numero de hermanos: <span>{{$d->numero_hermanos}}</span></p>
                    <p>¿Que lugar ocupas en la familia?: <span>{{$d->que_lugar_opupas_en_la_familia}}</span></p>                    
                
                @endforeach

                <h3>DATOS SOCIOECONOMICOS</h3>
                @foreach($socioeconomico as $d)
                    <p>Parentesco: <span>{{$d->parentesco}}</span></p>
                    <p>Edad: <span>{{$d->edad}}</span></p>
                    <p>Grado Escolar: <span>{{$d->grado_escolar}}</span></p>
                    <p>Ocupacion: <span>{{$d->ocupacion}}</span></p>
                    <p>Lugar de trabajo o estudio: <span>{{$d->lugar_de_trabajo}}</span></p>
                    <p>Ingreso mensual: <span>{{$d->ingreso_mensual}}</span></p>                    
                
                @endforeach



                @foreach($economico as $d)
                    <p>Tu principal sosten económico es: <span>{{$d->sosten_economico}}</span></p>
                    <p>Tipo de vivienda: <span>{{$d->tipo_vivienda}}</span></p>
                
                @endforeach

                <h3>ASPECTO ALIMENTICIO</h3>
                @foreach($comida as $d)
                    <p>Cuando llegas a la escuela ¿ya consumiste alimento?: <span>{{$d->ya_consumiste_alimento}}</span></p>
                    <p>Carne: <span>{{$d->carne}}</span></p>
                    <p>Pollo: <span>{{$d->pollo}}</span></p>
                    <p>Huevo: <span>{{$d->huevo}}</span></p>
                    <p>Leche: <span>{{$d->leche}}</span></p>
                    <p>verduras: <span>{{$d->verduras}}</span></p>
                    <p>tortillas: <span>{{$d->tortillas}}</span></p>
                    <p>pan: <span>{{$d->pan}}</span></p>
                    <p>refresco: <span>{{$d->refresco}}</span></p>

                @endforeach

                  <h3>ASPECTOS FAMILIARES</h3>
                @foreach($aspecto as $d)
                    <p>En que momento convive toda la familia: <span>{{$d->que_momento_convive_toda_la_familia}}</span></p>
                    <p>A que lugares acudes con tu familia para el esparcimiento: <span>{{$d->lugares_que_acudes_con_tu_familia}}</span></p>
                    <p>Como es la comunicacion con tu familia: <span>{{$d->como_es_la_comunicacion_con_tu_familia}}</span></p>
                    <p>¿Con que miembro de tu familia existe mayor confianza?: <span>{{$d->con_que_miembro_de_tu_familia_existe_mayor_confianza}}</span></p>
                    <p>Nombre: <span>{{$d->nombres}}</span></p>
                    <p>Telefono: <span>{{$d->telefono}}</span></p>
                    <p>E-mail: <span>{{$d->mail}}</span></p>
                    <p>Observaciones: <span>{{$d->observaciones}}</span></p>
                  
                @endforeach|