

void Ajout_poly(TPolynome * resultat, int deg , double coef )
{ int p=TPolynome , aux ; TMonome nouv = null;
    if ( nouv= (TMonome)malloc (sizeof (sMonome))==NULL ) {printf("erreur"); exit (1); }
    else
    { nouv->deg=deg;
      p->coef=coef;
      p->suiv=NULL;
         if (*resultat->prem ==NULL) { *resultat=p; }
         if ((*resultat)->deg == deg ) { (*resultat)->coef=aux->coef + coef ; }
         if ((*resultat)->deg < deg )  {p->suiv=*resultat; *resultat=p;  }
         if ((*resultat)->deg > deg )  { aux=*resultat while (aux->suiv!=NULL && aux->deg > deg ) {aux=aux->suiv ; }
                                         if (aux->suiv == NULL ) { if (aux->deg== deg) { aux->coef=aux->coef + coef ; }
                                                                   if (aux->deg > deg  { aux->suiv=p; }
                                                                }
                                         if (aux->suiv != NULL) {{ if (aux->deg== deg) { aux->coef=aux->coef + coef ; }
                                                                   if (aux->deg > deg  { p->suiv=aux->suiv;  aux->suiv=p;}
                                                                }}  }

    }
}


void addition_poly (TPolynome *resultat , TPolynome oper1,TPolynome oper2;)

{ TPolynome aux ;
*resultat = NULL;
    while ( oper1!=NULL) && (oper2!=NULL)
    {  if (oper1->deg > oper2->deg)
             {  ajout_poly(resultat,oper1->deg,oper1->coef); oper1=oper1->suiv ; }
       if (oper1->deg < oper2->deg)
          {   ajout_poly(resultat,oper2->deg,oper2->coef); oper2=oper2->suiv ; }
       if (oper1->deg == oper2->deg )
          {   ajout_poly(resultat,oper1->deg,oper1->coef+ oper2->coef ); oper1=oper1->suiv; oper2=oper2->suiv ; }

    }
    if (oper1==NULL && oper2!=NULL ) { while  (oper2!=NULL ) { ajout_poly(resultat,oper2->deg,oper2->coef); oper2=oper2->suiv; }}

    if (oper1==NULL && oper2!=NULL ) {  while  (oper1!=NULL ) { ajout_poly(resultat,oper1->deg,oper1->coef); oper1=oper1->suiv; }}


}

void Derivation_Poly(TPolynome *p , TPolynome polynome )
{   *p=NULL ;
	SMonome m = polynome->prem;
    while (m!= NULL)
    {
       Ajout_Poly(p,polynome->deg - 1 , polynome->deg * polynome coef ) ;
       m=m->suiv ;
    }
}

void Primitive_Poly(TPolynome *p,TPolynome polynome )
{
  *p=NULL ;
  while (polynome != NULL  )
    {
       Ajout_Poly(p,polynome->deg + 1 ,  polynome coef / (polynome->deg+1) ) ;
       polynome=polynome->suiv ;
    }
}

void Multiplication_Poly ( TPolynome *resultat , TPolynome oper1, TPolynome oper2)
{ *resultat=NULL ;
    while (oper1!=NULL)
    {
        aux=oper2;
        while(aux!=NULL)
        { Ajout_poly(resultat,aux->deg+oper1->deg,aux->coeg*oper1->coef); aux=aux->suiv;}
      oper1=oper1->suiv;
    }
}


