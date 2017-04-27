<?php
namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;

    use AppBundle\UnitRepository;

    class UnitController extends Controller
    {
        /**
         * @Route("/units/list")
         */
        public function listAction(Request $request)
        {
            $unitRepository = new UnitRepository();
            $units = $unitRepository->getAll();

            $argsArray = [
                'units' => $units
            ];

            $templateName = 'units/list';
            return $this->render($templateName . '.html.twig', $argsArray);
        }

         /**
     * @Route("/units/new", name="units_new_form")
     */
    public function newFormAction(Request $request)
    {
        $argsArray = [
        ];

        $templateName = 'units/new';
        return $this->render($templateName . '.html.twig', $argsArray);
    }

    /**
         * @Route("/units/processNewForm", name="units_process_new_form")
         */
        public function processNewFormAction(Request $request)
        {
            // extract 'name' parameter from POST data
            $name = $request->request->get('name');
            $icon = $request->request->get('icon');
            $description = $request->request->get('description');


            // forward this to the createAction() method
            return $this->createAction($name, $icon, $descrption);
        }
}