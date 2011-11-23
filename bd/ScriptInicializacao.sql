use gac;
CALL proc_inserirAdministrador('admin', 'admin','Administrador','Suzane','admin.ad@hotmail.com',@msg);


CALL `proc_inserirCategoria`('Projetos e programas de pesquisa (Iniciação Científica)',60,0);
CALL `proc_inserirCategoria`('Monitorias para aluno regularmente matriculado',60,30);
CALL `proc_inserirCategoria`('Projetos e Programas de extensão',30,0);
CALL `proc_inserirCategoria`('Eventos técnico-científicos e culturais',40,0);
CALL `proc_inserirCategoria`('Disciplinas de outros cursos, aceitos pela coordenação, não previstos no
currículo pleno',30,0);
CALL `proc_inserirCategoria`('Atividades Livres (Trabalho Voluntário, Leitura de Clássicos)',20,0);
CALL `proc_inserirCategoria`('Participação discente em órgão colegiado',20,0);
CALL `proc_inserirCategoria`('Grupos de Estudos',20,0);

/*Artigo Publicado...*/

CALL `proc_inserirCategoria`('Viagem de Estudo',10,0);
CALL `proc_inserirCategoria`('Visitas Técnicas',30,0);
CALL `proc_inserirCategoria`('Frequência e aprovação em treinamentos na área realizados da
Impacta Treinamentos, com conteúdo não previstos no currículo do
curso.',40,20);
CALL `proc_inserirCategoria`('Frequência e aprovação em cursos/atividades, aceitos pela coordenação
de curso, não previstos no currículo do curso.',40,20);
CALL `proc_inserirCategoria`('Inglês - ITP-TOEFL',40,20);
CALL `proc_inserirCategoria`('Inglês - IELTS',40,20);
CALL `proc_inserirCategoria`('Francês',40,20);
CALL `proc_inserirCategoria`('Castelhano',40,20);
CALL `proc_inserirCategoria`('Italiano',40,20);
CALL `proc_inserirCategoria`('Alemão',40,20);
CALL `proc_inserirCategoria`('Artigo em Revista de Circulação Local',5,0);
CALL `proc_inserirCategoria`('Artigo na web',5,0);
CALL `proc_inserirCategoria`('Artigo em Revista de Grande Circulação',10,0);
CALL `proc_inserirCategoria`('Artigo em jornal de Grande Circulação',10,0);
CALL `proc_inserirCategoria`('Resumo em Anais de Evento Científico',20,0);
CALL `proc_inserirCategoria`('Resenha em Revista Científica',20,0);
CALL `proc_inserirCategoria`('Artigo em Revista Científica',5,0);
CALL `proc_inserirCategoria`('Artigo em Livro Científico',50,0);
CALL `proc_inserirCategoria`('Artigo em Anais de Evento Científico',40,0);






CALL`proc_listarCategorias`