<?php
/* Copyright (C) 2012-2013	Regis Houssin	<regis.houssin@capnetworks.com>
 * Copyright (C) 2012-2013	Herve Prot		<herve.prot@symeos.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$orders = array(
		'CHARSET' => 'UTF-8',
		'OrdersArea' => 'Клиенты заказы области',
		'SuppliersOrdersArea' => 'Поставщики заказы области',
		'OrderCard' => 'Заказать карту',
		'OrderId' => 'Order Id',
		'Order' => 'Заказ',
		'Orders' => 'Приказы',
		'OrderLine' => 'Заказ линии',
		'OrderLines' => 'Order lines',
		'OrderFollow' => 'Последующие меры',
		'OrderDate' => 'Дата заказа',
		'OrderToProcess' => 'Для обработки',
		'NewOrder' => 'Новый порядок',
		'ToOrder' => 'Сделать заказ',
		'MakeOrder' => 'Сделать заказ',
		'SupplierOrder' => 'Для поставщиков',
		'SuppliersOrders' => 'Поставщики заказ',
		'SuppliersOrdersRunning' => 'Текущие поставщиков заказов',
		'CustomerOrder' => 'Для клиентов',
		'CustomersOrders' => 'Клиенты заказ',
		'CustomersOrdersRunning' => 'Текущие клиентов заказы',
		'CustomersOrdersAndOrdersLines' => 'Клиент приказов и распоряжений линий',
		'OrdersToValid' => 'Приказы по силе',
		'OrdersToBill' => 'Заказы на законопроект',
		'OrdersInProcess' => 'Заказы в процессе',
		'OrdersToProcess' => 'Заказы на процесс',
		'SuppliersOrdersToProcess' => 'Поставщика заказов для обработки',
		'StatusOrderCanceledShort' => 'Отменен',
		'StatusOrderDraftShort' => 'Черновик',
		'StatusOrderValidatedShort' => 'Подтвержденные',
		'StatusOrderSentShort' => 'В процессе',
		'StatusOrderSent' => 'Shipment in process',
		'StatusOrderOnProcessShort' => 'В процессе',
		'StatusOrderProcessedShort' => 'Обработано',
		'StatusOrderToBillShort' => 'В законопроекте',
		'StatusOrderToBill2Short' => 'To bill',
		'StatusOrderApprovedShort' => 'Утверждено',
		'StatusOrderRefusedShort' => 'Отказался',
		'StatusOrderToProcessShort' => 'Для обработки',
		'StatusOrderReceivedPartiallyShort' => 'Частично получил',
		'StatusOrderReceivedAllShort' => 'Все полученные',
		'StatusOrderCanceled' => 'Отменен',
		'StatusOrderDraft' => 'Проект (должно быть подтверждено)',
		'StatusOrderNeedQuotes' => 'Draft (needs manual quotes)',
		'StatusOrderNew' => 'New order (needs to be validated)',
		'StatusOrderProcessing' => 'Processing',
		'StatusOrderValidated' => 'Подтвержденные',
		'StatusOrderOnProcess' => 'В процессе',
		'StatusOrderSending' => 'Sending',
		'StatusOrderClosed' => 'Closed (Shipped)',
		'StatusOrderToBill' => 'В законопроекте',
		'StatusOrderToBill2' => 'To bill',
		'StatusOrderApproved' => 'Утверждено',
		'StatusOrderRefused' => 'Отказался',
		'StatusOrderError' => 'Error',
		'StatusOrderReceivedPartially' => 'Частично получил',
		'StatusOrderReceivedAll' => 'Все полученные',
		'ShippingExist' => 'Отгрузки существует',
		'DraftOrWaitingApproved' => 'Проект или утверждены еще не заказал',
		'DraftOrWaitingShipped' => 'Проект или подтверждены не отгружен',
		'MenuOrdersToBill' => 'Заказы на законопроект',
		'MenuOrdersToBill2' => 'Orders to bill',
		'SearchOrder' => 'Поиск тем',
		'Sending' => 'Отправка',
		'Sendings' => 'Отправок',
		'ShipProduct' => 'Судно продукта',
		'Discount' => 'Скидка',
		'CreateOrder' => 'Создать заказ',
		'RefuseOrder' => 'Отписаться порядка',
		'ApproveOrder' => 'Принять порядок',
		'ValidateOrder' => 'Проверка порядка',
		'UnvalidateOrder' => 'Unvalidate порядке',
		'DeleteOrder' => 'Удалить тему',
		'CancelOrder' => 'Отмена порядка',
		'AddOrder' => 'Добавить тему',
		'AddToMyOrders' => 'Добавить в мои заказы',
		'AddToOtherOrders' => 'Добавить в других заказов',
		'ShowOrder' => 'Показать порядок',
		'NoOpenedOrders' => 'Нет открыл заказов',
		'NoOtherOpenedOrders' => 'Никакие другие открыли заказов',
		'OtherOrders' => 'Другие заказы',
		'LastOrders' => 'Последнее %s заказов',
		'LastModifiedOrders' => 'Последнее% с измененными заказов',
		'LastClosedOrders' => 'Последнее% с закрытых заказов',
		'AllOrders' => 'Все заказы',
		'NbOfOrders' => 'Количество заказов',
		'OrdersStatistics' => 'Приказы Статистика',
		'OrdersStatisticsSuppliers' => 'Поставщик заказов статистика',
		'NumberOfOrdersByMonth' => 'Количество заказов в месяц',
		'AmountOfOrdersByMonthHT' => 'Сумма заказов в месяц (за вычетом налогов)',
		'ListOfOrders' => 'Список заказов',
		'CloseOrder' => 'Закрыть тему',
		'ConfirmCloseOrder' => 'Вы уверены, что хотите, чтобы закрыть эту тему? После того, как заказ является закрытым, он может быть выставлен счет.',
		'ConfirmCloseOrderIfSending' => 'Вы уверены, что хотите, чтобы закрыть эту тему? Вы должны закрыть тему только тогда, когда все судоходство осуществляется.',
		'ConfirmDeleteOrder' => 'Вы уверены, что хотите удалить эту тему?',
		'ConfirmValidateOrder' => 'Вы уверены, что хотите проверить эту тему под <b>названием %s?</b>',
		'ConfirmUnvalidateOrder' => 'Вы уверены, что хотите, чтобы восстановить порядок <b>%s</b> к проекту статус?',
		'ConfirmCancelOrder' => 'Вы уверены, что хотите отменить этот заказ?',
		'ConfirmMakeOrder' => 'Вы уверены, что хотите, чтобы подтвердить вы сделали этот заказ <b>на %s?</b>',
		'GenerateBill' => 'Создать счет-фактуру',
		'ClassifyShipped' => 'Classify delivered',
		'ClassifyBilled' => 'Классифицировать "Billed"',
		'ComptaCard' => 'Бухгалтерия карту',
		'DraftOrders' => 'Проект распоряжения',
		'RelatedOrders' => 'Похожие заказов',
		'OnProcessOrders' => 'В процессе заказов',
		'RefOrder' => 'Ref. заказ',
		'RefCustomerOrder' => 'Ref. Для клиента',
		'CustomerOrder' => 'Для клиентов',
		'RefCustomerOrderShort' => 'Ref. CUST. заказ',
		'SendOrderByMail' => 'Отправить заказ по почте',
		'ActionsOnOrder' => 'Меры по заказу',
		'NoArticleOfTypeProduct' => 'Нет статьи типа "продукт", поэтому не shippable статью для этого заказа',
		'OrderMode' => 'Заказать метод',
		'AuthorRequest' => 'Просьба автора',
		'UseCustomerContactAsOrderRecipientIfExist' => 'Используйте адрес клиента, если определено, вместо сторонних адрес как адрес получателя порядка',
		'RunningOrders' => 'Приказы о процессе',
		'UserWithApproveOrderGrant' => 'Useres предоставляется с "утвердить приказы" разрешения.',
		'PaymentOrderRef' => 'Оплата заказа %s',
		'CloneOrder' => 'Клон порядка',
		'ConfirmCloneOrder' => 'Вы уверены, что хотите клон этого <b>приказа %s?</b>',
		'DispatchSupplierOrder' => 'Прием %s поставщиком для',
		'DateDeliveryPlanned' => 'Date de livraison prévue',
		'SetDemandReason' => 'Définir l\'origine de la commande',
		////////// Types de contacts //////////
		'TypeContact_commande_internal_SALESREPFOLL' => 'Представитель следующие меры для клиентов',
		'TypeContact_commande_internal_SHIPPING' => 'Представитель следующие меры судоходства',
		'TypeContact_commande_external_BILLING' => 'свяжитесь со счета',
		'TypeContact_commande_external_SHIPPING' => 'обратитесь в службу доставки',
		'TypeContact_commande_external_CUSTOMER' => 'Абонентский отдел следующие меры для',
		'TypeContact_order_supplier_internal_SALESREPFOLL' => 'Представитель следующие меры поставщиком для',
		'TypeContact_order_supplier_internal_SHIPPING' => 'Представитель следующие меры судоходства',
		'TypeContact_order_supplier_external_BILLING' => 'Поставщик счет контакта',
		'TypeContact_order_supplier_external_SHIPPING' => 'Поставщик доставка контакты',
		'TypeContact_order_supplier_external_CUSTOMER' => 'Поставщик связаться следующие меры для',
		'Error_COMMANDE_SUPPLIER_ADDON_NotDefined' => 'Постоянная COMMANDE_SUPPLIER_ADDON не определена',
		'Error_COMMANDE_ADDON_NotDefined' => 'Постоянная COMMANDE_ADDON не определена',
		'Error_FailedToLoad_COMMANDE_SUPPLIER_ADDON_File' => 'Не удалось загрузить модуль файл \' %s\'',
		'Error_FailedToLoad_COMMANDE_ADDON_File' => 'Не удалось загрузить модуль файл \' %s\'',
		'Error_OrderNotChecked' => 'No orders to invoice selected',
		// Sources
		'OrderSource0' => 'Коммерческое предложение',
		'OrderSource1' => 'Интернет',
		'OrderSource2' => 'Mail кампании',
		'OrderSource3' => 'Телефон compain',
		'OrderSource4' => 'Факс кампании',
		'OrderSource5' => 'Коммерческие',
		'OrderSource6' => 'Склад',
		'QtyOrdered' => 'Количество заказанных',
		'AddDeliveryCostLine' => 'Добавить доставки Стоимость линии с указанием веса заказа',
		// Documents models
		'PDFEinsteinDescription' => 'Для полной модели (logo. ..)',
		'PDFEdisonDescription' => 'Простая модель для',
		// Orders modes
		'OrderByMail' => 'Почта',
		'OrderByFax' => 'Факс',
		'OrderByEMail' => 'EMail',
		'OrderByWWW' => 'Интернет',
		'OrderByPhone' => 'Телефон',
		'CreateInvoiceForThisCustomer' => 'Bill orders',
		'NoOrdersToInvoice' => 'No orders billable',
		'CloseProcessedOrdersAutomatically' => 'Classify "Processed" all selected orders.',
		'MenuOrdersToBill2' => 'Orders to bill',
		'LinkedInvoices' => 'Linked invoices',
		'LinkedProposals' => 'Linked proposals',
		'ShippingHT' => 'Shipping cost'
);
?>