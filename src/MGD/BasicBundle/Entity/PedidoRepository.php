<?php

namespace MGD\BasicBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * PedidoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PedidoRepository extends EntityRepository
{
    /**
     * @param $dateFromTimestamp
     * @param $dateUntilTimestamp
     * @return array
     */
    public function getRowsPaymentsToUsersByMonth($dateFromTimestamp=null,$dateUntilTimestamp=null)
    {
        $sql="SELECT sum(total) as ganado, count(id) as pedidos_n, DATE_FORMAT(fecha,'%Y-%m') as mes
                FROM `pedido`
                WHERE estado_id IS NOT NULL
                "
            .($dateFromTimestamp && $dateUntilTimestamp ? " AND fecha BETWEEN '$dateFromTimestamp' AND '$dateUntilTimestamp' ": '').
            "

              GROUP BY mes
              ORDER BY fecha ASC
            "
        ;

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();

        return $this->setFormatResultToChartSimpleArray($resultado,$dateFromTimestamp,$dateUntilTimestamp);

    }

    /**
     * @param array $resultadoSQL
     * @param $dateFromTimestamp
     * @param $dateUntilTimestamp
     * @return array
     */
    private function setFormatResultToChartSimpleArray(array $resultadoSQL,$dateFromTimestamp,$dateUntilTimestamp)
    {

        if (!$dateFromTimestamp)
            $dateFromTimestamp=$resultadoSQL[0]['mes'].' 00:00:00';

        if (!$dateUntilTimestamp)
            $dateUntilTimestamp=$resultadoSQL[count($resultadoSQL)-1]['mes'].' 00:00:00';

        $fechaFin = new \DateTime($dateUntilTimestamp);
        $fechaFin = $fechaFin->add(\DateInterval::createFromDateString('+1 month'));

        $result=array();

        $cont=0;

        $fechaActual = new \DateTime($dateFromTimestamp);

        while($fechaActual->format('Y-m') != $fechaFin->format('Y-m'))
        {
            if (isset($resultadoSQL[$cont]) && $fechaActual->format('Y-m') == $resultadoSQL[$cont]['mes'])
            {
                $result[]=$resultadoSQL[$cont];
                $cont++;
                $fechaActual=$fechaActual->add(\DateInterval::createFromDateString('+1 month'));
            }else{

                $aux['mes']=$fechaActual->format('Y-m');
                $aux['pedidos_n']=0;
                $aux['ganado']=0;

                $result[]=$aux;
                $fechaActual=$fechaActual->add(\DateInterval::createFromDateString('+1 month'));
            }

        }

        return $result;
    }


}
