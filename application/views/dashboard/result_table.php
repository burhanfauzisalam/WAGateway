<?php if (!empty($results)): ?>
                <h4>Hasil Pengiriman:</h4>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Tujuan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $i => $row): ?>
                            <?php
                                $resData = json_decode($row['response'], true);
                                // $messageId = $resData['data']['key']['id'] ?? '-';
                                $messageText = $resData['data']['message']['extendedTextMessage']['text'] ?? '-';
                                $status = $resData['data']['status'] ?? 'UNKNOWN';
                            ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= htmlentities($row['number']) ?></td>
                                <td><?= (htmlentities($status)=="PENDING")?"SENT":"ERROR" ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Tidak ada hasil.</p>
            <?php endif; ?>