<?php
/**
 * Created by PhpStorm.
 * User: lucio
 * Date: 16/02/17
 * Time: 11:42
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Contacts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends Controller
{
    /**
     * Lists all Contacts entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('AppBundle:Contacts')->findAll();


        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $contacts,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)
        );


        return $this->render('contacts/index.html.twig', array(
            'contacts' => $result   ,
        ));
    }

    /**
     * Creates a new Contact .
     *
     */
    public function newAction(Request $request)
    {
        $contact = new Contacts();
        $contact->setDatetime(new \DateTime('now'));
        $form = $this->createForm('AppBundle\Form\ContactsType', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            // Set successfully message
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Contact saved successfully !')
            ;

            // Clean field and call form again
            return $this->redirect($request->getUri());

        }

        return $this->render('contacts/new.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }

    /**
     * Edit an existing Contact.
     *
     */
    public function editAction(Request $request, Contacts $contacts)
    {
        $deleteForm = $this->createDeleteForm($contacts);
        $editForm = $this->createForm('AppBundle\Form\ContactsType', $contacts);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacts);
            $em->flush();

            // Set successfully message
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Contact saved successfully !')
            ;

            // redirect to the "contact_index" route
            return $this->redirectToRoute('contact_index');

        }

        return $this->render('contacts/edit.html.twig', array(
            'contacts' => $contacts,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contact entity.
     *
     */
    public function deleteAction(Request $request, Contacts $contacts)
    {
        $form = $this->createDeleteForm($contacts);
        $form->handleRequest($request);

        // It is only deleted if comes from deete bottom in Edit
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contacts);
            $em->flush();
        }

        //return $this->redirectToRoute('couple_index');
        return new Response("Contact deleted");
    }



    /**
     * Creates a form to delete a Contact entity.
     *
     * @param Contacts $couple The Couple entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contacts $contacts)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contact_delete', array('contacts' => $contacts->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}